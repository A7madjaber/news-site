<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;




class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:read_categories')->only(['index']);
        $this->middleware('permission:create_categories')->only(['create','store']);
        $this->middleware('permission:update_categories')->only(['edit','update']);
        $this->middleware('permission:delete_categories')->only(['destroy']);

    }






    public function getDataTableCategories(Category $items)
    {
        try {
            return DataTables::of($items->orderBy('created_at', 'DESC'))->editColumn('created_at', function ($item) {
                return get_date_from_timestamp($item->created_at);


            })

                ->addColumn('action', function ($item) {

                    if(Auth()->user()->hasPermission('delete_categories')) {
                        return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">
						
                            <button type="button"   data-url="' . route('dashboard.category.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>
							<button   type="button" data-url="' . route('dashboard.category.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		      		          </div>';

                    }
                     return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">
						
                            <button type="button"   data-url="' . route('dashboard.category.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>
							<button  disabled type="button" data-url="' . route('dashboard.category.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		      		          </div>';



            })->rawColumns(['action'])->make(true);
        } catch (\Exception $e) {
            return $this->response_api(false, '');
        }
    }


    public function index()
    {


        $category = Category::all();
        return view('dashboard.Category.all', compact('category'));

    }


    public function store(Request $request)
    {


        Category::create($request->all());
        return redirect()->route('dashboard.category.all')->with('success', 'تمت الاضافة بنجاح ');
    }



    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.edit', compact('category'));

    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->news()->sync($request->categoryid);
        $category->update($request->all());
        return redirect()->route('dashboard.category.all')->with('success', 'تم التعديل بنجاح ');
    }



    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(['message' => 'تمت العملية بنجاح', 'status' => true], 200);
    }
}
