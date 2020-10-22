<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCreateRequest;
//use App\Http\Requests\AdminUpdateRequest;
use App\Http\Requests\AdminEditRequest;
use Illuminate\Http\Request;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;


class AdminController extends Controller
{
    public function __construct()
    {

       $this-> middleware(['auth','role:Super_admin']);


    }



    public function index(){



        return view('dashboard.Admins.all');
    }



    public function getDataTableAdmins()
    {
        try {

            $items = User::whereRoleNot(['Super_admin']);

            return DataTables::of($items->orderBy('created_at', 'DESC'))->editColumn('created_at', function ($item) {


            })

                ->addColumn('role', function ($item)

            {
                return $item->roles()->pluck('name')->toArray();

            })

                ->addColumn('action', function ($item) {



                return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">
							
						
                            <button type="button"   data-url="' . route('dashboard.admin.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>
							<button type="button" data-url="' . route('dashboard.admin.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		      		            </div>';
            })->rawColumns(['action'])->make(true);
        } catch (\Exception $e) {
            return $this->response_api(false, '');
        }
    }


    public function create(){
        $roles=Role::whereRoleNot(['Admin'])->get();
        return view('dashboard.Admins.create',compact('roles'));
    }


    protected function store(AdminCreateRequest $request)
    {


        $request->merge(['password'=>bcrypt($request->password)]);

        $User = User::create($request->all());


        $User->attachRoles(['admin',$request->role]);
        return redirect()->route('dashboard.admins.all')->with('success', 'تمت الاضافة بنجاح ');


    }


    public function edit($id){


        $admin=User::findOrFail($id);

        $roles=Role::whereRoleNot(['Admin'])->get();


        $isSuper_admin= $admin->roles()->pluck('name')->toArray();


         if($isSuper_admin!=['Super_admin']){

             return view('dashboard.Admins.edit',compact('admin','roles'));

         }else{
             abort(403);
         }

    }



    public function update(AdminEditRequest $request, $id)
    {

        $request->validate([

            'email' => 'required|email|unique:users,email,'. $id,

        ]);



        $admin = User::findOrFail($id);

        $request->merge(['password'=>bcrypt($request->password)]);


        if ($admin->image != null and $admin->image!=$request->image){

            Storage::delete('uploads/images/'. $admin->image);
            app('App\Logic\ImageRepository')-> delete($admin->image);
        }

        $admin->syncRoles([$request->role]);


        $admin->update($request->all());

        return redirect()->route('dashboard.admins.all')->with('success', 'تم التعديل بنجاح ');
    }


    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->detachroles();

        app('App\Logic\ImageRepository')-> delete($admin->image);
        Storage::delete('uploads/images/'. $admin->image);

        $admin->delete();

        return response()->json(['message' => 'تمت العملية بنجاح', 'status' => true], 200);
    }
}
