<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mail;
use App\Models\News;
use App\Models\Page;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.home');
    }

    public function categoryNews($slug)
    {

        $category=Category::where('slug',$slug)->first()->name;

        $news= News::whereHas('category',function($q) use($category){
            return $q->where('categories.name',"=",$category);

        })->Paginate(10);

          return view('front.news_category',compact('news','category'));
    }



    public function videos(){
        $videos= Video::Paginate(4);

        return view('front.video.main-videos',compact('videos'));

    }
    public function videoSelect($slug){

             $video=Video::where('slug',$slug)->first();
              $videos= Video::where('id','!=',$video->id)->Paginate(3);
            $key='video'.$video->slug;

        if(!Session::has($key)){
          $video->increment('views',1);
          Session::put($key,1);

        }

              return view('front.video.videoSelect',compact('videos','video'));
    }



    public function newIndex($slug){

     $new=News::where('slug',$slug)->first();
        $description=$new->description;
        $tags=$new->tags;
        $title=$new->title;

     $category= $new->category()->pluck('name')->toArray();


    $news= News::whereHas('category',function($q) use($category){
        return $q->where('categories.name',"=",(array)$category);
    })->Paginate(6);


        $key='new'.$new->slug;
        if(!Session::has($key)){
            $new->increment('views',1);
            Session::put($key,1);

        }


        return view('front.new-index',compact('news','new','description','tags','title'));

}






public function contact(){
        return view('front.pages.contact');
    }




    public function send(Request $request){
        Mail::create($request->all());
        return redirect()->back()->with('success', 'تم الارسال بنجاح انتظر الرد خلال 24 ساعة');
    }



    public function page($slug){
        $page=Page::where('slug',$slug)->first();
        return view('front.pages.page',compact('page'));
    }





    public function search(Request $request)
    {

        $news=News::where('title','like','%'. $request->search .'%')
            ->orWhere('description','like','%'. $request->search .' %')
            ->orderBy('created_at', 'desc') ->get();


        return view('front.search',compact('news'));


    }



}
