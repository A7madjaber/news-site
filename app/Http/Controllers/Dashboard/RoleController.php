<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\RolesRequest;
use App\Role;
use Yajra\DataTables\DataTables;


class RoleController extends Controller
{



    public function __construct()
    {
        $this->middleware('permission:read_roles')->only(['index']);
        $this->middleware('permission:create_roles')->only(['create','store']);
        $this->middleware('permission:update_roles')->only(['edit','update']);
        $this->middleware('permission:delete_roles')->only(['destroy']);

    }




    public function getDataTableRoles(Role $items)
    {

        $items =Role::whereRoleNot(['Super_admin'])->with('permissions');

        try {
            return DataTables::of($items->orderBy('created_at', 'DESC'))->editColumn('created_at', function ($item) {
                return get_date_from_timestamp($item->created_at);
            })


                ->addColumn('action', function ($item) {
                    if(Auth()->user()->hasPermission('delete_roles')) {

                        return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">
							
						
							<button type="button"   data-url="' . route('dashboard.roles.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>
							<button type="button" data-url="' . route('dashboard.roles.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		            </div>';

                    }

                    return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">
							
						
							<button type="button"   data-url="' . route('dashboard.roles.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>
							<button disabled type="button" data-url="' . route('dashboard.roles.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		            </div>';



                })->rawColumns(['action'])->make(true);
        } catch (\Exception $e) {
            return $this->response_api(false, '');
        }
    }



    public function index()
    {


        return view('dashboard.Roles.all',compact('roles'));
    }


    public function create()
    {

        return view('dashboard.roles.create');
    }


    public function store(RolesRequest $request)
    {
        $role =Role::create($request->all());
        $role->attachPermissions($request->permissions);
        return redirect()->route('dashboard.roles.all')->with('success', 'تمت الاضافة بنجاح ');
    }


    public function edit($id)
    {
        if ($id==1){
            abort(403);
        }

       $Role=Role::findOrFail($id);
        return  view('dashboard.roles.edit',compact('Role'));
    }



    public function update(RolesRequest $request,$id)
    {

        $Role = Role::findOrFail($id);
        $Role->update($request->all());
        $Role->syncPermissions($request->permissions);
        return redirect()->route('dashboard.roles.all')->with('success', 'تمت الاضافة بنجاح ');

    }



    public function destroy($id)
    {
        Role::findOrFail($id)->delete();

        return response()->json(['message' => 'تمت العملية بنجاح', 'status' => true], 200);

    }
}
