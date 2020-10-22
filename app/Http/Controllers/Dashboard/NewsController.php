<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\NewsEditRequest;
use App\Image;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{



    public function __construct()
    {
        $this->middleware('permission:read_news')->only(['index']);
        $this->middleware('permission:create_news')->only(['create','store']);
        $this->middleware('permission:update_news')->only(['edit','update']);
        $this->middleware('permission:delete_news')->only(['destroy']);

    }





    public function getDataTableNews(News $items)
    {


        try {
            return DataTables::of($items->orderBy('created_at', 'DESC'))->editColumn('created_at', function ($item) {
                return get_date_from_timestamp($item->created_at);
            })
                ->addColumn('category_id', function ($item)

                {
                    return $item->category()->pluck('name')->toArray();

                })

                ->addColumn('action', function ($item) {


                    if(Auth()->user()->hasPermission('delete_news')) {

                        return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'


                            . '<button type="button"   data-url="' . route('dashboard.news.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>'


                            . '<button  type="button" data-url="' . route('dashboard.news.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';

                    }

                    return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'


                        . '<button type="button"   data-url="' . route('dashboard.news.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>'


                        . '<button  disabled type="button" data-url="' . route('dashboard.news.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';






                })->rawColumns(['action'])->make(true);
        } catch (\Exception $e) {
            return $this->response_api(false, '');
        }
    }

    public function index()
    {
        $news = News::all();
        return view('dashboard.News.all', compact('news'));
    }



    public function create()
    {
        $categories = Category::all();
        return view('dashboard.News.create', compact('categories'));
    }


    public function store(NewsRequest $request)
    {
       $new= News::create($request->all());
       $new->category()->sync($request->categoryid);
       return redirect()->route('dashboard.news.all')->with('success', 'تمت الاضافة بنجاح ');
    }


    public function edit($id)
    {
        $new = News::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.News.edit', compact('new', 'categories'));

    }


    public function update(NewsEditRequest $request, $id)
    {
        $new = News::findOrFail($id);
        if ($new->image!=$request->image){
            app('App\Logic\ImageRepository')-> delete($new->image);
        }

        $new->category()->sync($request->categoryid);
        $new->update($request->all());
        return redirect()->route('dashboard.news.all')->with('success', 'تم التعديل بنجاح ');
    }



    public function destroy($id)
    {
        $new = News::findOrFail($id);
        $new->category()->detach();
        app('App\Logic\ImageRepository')-> delete($new->image);
        $new->delete();
        return response()->json(['message' => 'تمت العملية بنجاح', 'status' => true], 200);
    }
}
