
@extends('front.layouts.index',['title'=>$video->name])
@section('content')




<div class="pageContent pt-0">
    <div class="section-video mb-5">

        <div class="row">

            <div class="col-lg-10 m-auto">
                <h3 class="title-gallery">{{@$video->name}}</h3>
                <div id="player" data-plyr-provider="youtube"
                     data-plyr-embed-id="{{ltrim(@$video->url)}}"></div>
        </div>

    </div>
</div>
</div>
<div class="container">
    <div class="layout-header">
        <h3 class="header-link link-9"> <a href="">فيديو</a></h3>
    </div>
    <div class="row">
        @foreach($videos as $key=>$video)

        <div class="col-lg-4 col-sm-6">
            <div class="entry-box box-1 video-1">
                <div class="thumb"><a href="">
                        <picture>
                            <source media="(max-width: 768px)" srcset="{{image_url(@$video->image,'344x224')}}">
                            <source media="(max-width: 992px)" srcset="{{image_url(@$video->image,'344x224')}}">
                            <img src="{{image_url(@$video->image,'344x224')}}" alt="">
                        </picture></a></div>
                <div class="entry-body p-2">
                    <h3 class="title font-size-16 font-size-md-16 "><a href="{{route('video',[$video->slug])}}">{{@$video->name}}</a></h3>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-lg-12">
            <ul class="pagination justify-content-center">
                <ul class="pagination justify-content-center">
                    {{@$videos->links()}}

                </ul>
            </ul>
        </div>
    </div>
</div>





@stop
