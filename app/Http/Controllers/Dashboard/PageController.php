<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class PageController extends Controller
{


    public function __construct()
    {
        $this->middleware('permission:read_pages')->only(['index']);
        $this->middleware('permission:create_pages')->only(['create','store']);
        $this->middleware('permission:update_pages')->only(['edit','update']);
        $this->middleware('permission:delete_pages')->only(['destroy']);

    }


    public function getDataTablePages(Page $items)
    {
        try {
            return DataTables::of($items->orderBy('created_at', 'DESC'))->editColumn('created_at', function ($item) {
                return get_date_from_timestamp($item->created_at);
            })


                ->addColumn('action', function ($item) {


                    if(Auth()->user()->hasPermission('delete_pages')) {

                        return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'


                            . '<button type="button"   data-url="' . route('dashboard.page.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>'


                            . '<button  type="button" data-url="' . route('dashboard.page.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';

                    }

                    return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'


                        . '<button type="button"   data-url="' . route('dashboard.page.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>'


                        . '<button  disabled type="button" data-url="' . route('dashboard.page.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';






                })->rawColumns(['action'])->make(true);
        } catch (\Exception $e) {
            return $this->response_api(false, '');
        }
    }





    public function index(){

        return view('dashboard.Page.all', compact('page'));

    }


    public function create(){


        return view('dashboard.Page.create');

    }


    public function store(Request $request){

        Page::create($request->all());

        return redirect()->route('dashboard.page.all') ->with('success' , 'تمت الاضافة بنجاح ');

    }
    public function edit($id)
    {

        $page=Page::findOrFail($id);


        return view('dashboard.Page.edit',compact('page'));

    }


    public function update(Request $request, $id)
    {


        Page::findOrFail($id)->update($request->all());
        return redirect()->route('dashboard.page.all')->with('success' , 'تم التعديل بنجاح ');

    }

    public function destroy($id)
    {

       Page::findOrFail($id)->delete();
        return response()->json(['message'=>'تمت العملية بنجاح','status'=>true],200);
    }
}
