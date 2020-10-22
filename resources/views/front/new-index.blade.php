
<div class="main-wrapper" style="background-color: ghostwhite">

    @extends('front.layouts.index',['title'=>$new->title])
    @section('content')


        <div class="pageContent">
            <div class="container">


                <div class="page-post background-white overlay-box p-2">


                    <div class="image-post thumb position-relative mb-3"><a><img style="width: 1094px;height:345px" src="{{image_url($new->image,'1094x345')}}" alt=""></a>
                        <h3 class="title-post">
                            <div class="row">
                                <div class="col-lg-9"><b><h3 style="margin-top: -78px; margin-right: 23px; color: white;font-size:24px;">{{$new->title}}</h3></b></div>
                            </div>
                        </h3>
                    </div>

                    <div class="row mb-4 pr-2 pl-2">
                        <div class="col-lg-6">
                            <p class="date-post text-right"> <i class="icon-clock d-inline-block pl-2"> <span class="d-inline-block">{{$new->created_at}}</span></i></p>
                        </div>

                    </div>

                    <div class="text-post pr-2 pl-2">
                        <p class="text">{{strip_tags($new->description) }}</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="py-5">
                <div class="layout-header">
                    <h3 class="header-link link-3"> أخبار ذات صلة</h3>
                </div>
                <div class="row">

                    @foreach($news as $news)
                        <div class="col-lg-6 " style="">
                            <div class="entry-box entry-box-2 d-flex align-items-center no-gutters box-1 white-color">
                                <div class="thumb col-auto"><a href="{{route('new',[$news->slug])}}">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{image_url($news->image,'150x100')}}"><img src="{{image_url($news->image,'150x100')}}" alt="">
                                        </picture></a></div>
                                <div class="entry-title col p-3">
                                    <h5 class="title font-size-12 font-size-md-14"> <a href="{{route('new',[$news->slug])}}">{{$news->title}}</a></h5>
                                </div>
                            </div>

                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        </div>

@stop
