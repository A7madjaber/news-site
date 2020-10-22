<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;


class VideoController extends Controller
{


    public function __construct()
    {
        $this->middleware('permission:read_videos')->only(['index']);
        $this->middleware('permission:create_videos')->only(['create','store']);
        $this->middleware('permission:update_videos')->only(['edit','update']);
        $this->middleware('permission:delete_videos')->only(['destroy']);

    }
    public function index()
    {

        $video=Video::all();
        return view('dashboard.video.all',compact('video'));
    }



    public function getDataTableVideos(Video $items)
    {
        try {
            return DataTables::of($items->orderBy('created_at', 'DESC'))->editColumn('created_at', function ($item) {
                return get_date_from_timestamp($item->created_at);
            })


                ->addColumn('action', function ($item) {


                    if(Auth()->user()->hasPermission('delete_videos')) {

                        return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'


                            . '<button type="button"   data-url="' . route('dashboard.video.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>'


                            . '<button  type="button" data-url="' . route('dashboard.video.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';

                    }

                    return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'


                        . '<button type="button"   data-url="' . route('dashboard.video.edit', [$item->id]) . '"  class="m-btn btn btn-primary m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="fa fa-edit"></i></button>'


                        . '<button  disabled type="button" data-url="' . route('dashboard.video.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';






                })->rawColumns(['action'])->make(true);
        } catch (\Exception $e) {

            return $this->response_api(false, '');
        }
    }






    public function create()
    {
        return view('dashboard.video.add');
    }



    public function store(Request $request)
    {

        $url = $request->input('url');
        $url=str_replace('watch?v=','embed/',$url);
        $data=$request->all();
        $data['url']=$url;
        Video::create($data);
        return redirect()->route('dashboard.video.all')->with('success' , 'تمت الاضافة بنجاح ');

    }


    public function edit($id)
    {

        $video=Video::findOrFail($id);

        return view('dashboard.video.edit',compact('video'));


    }

    public function update(Request $request, $id)
    {

        $video=Video::findOrFail($id);
        if ($video->image!=$request->image){
            app('App\Logic\ImageRepository')-> delete($video->image);
        }
        $path = $request->input('url');
        $url=str_replace('watch?v=','embed/',$path );
        $data=$request->all();
        $data['url']=$url;

            $video->update($data);
        return redirect()->route('dashboard.video.all')->with('success' , 'تم التعديل بنجاح ');

    }


    public function destroy($id)
    {
        $video=Video::findOrFail($id);
        app('App\Logic\ImageRepository')-> delete($video->image);
        $video->delete();
        return response()->json(['message'=>'تمت العملية بنجاح','status'=>true],200);
    }
}
