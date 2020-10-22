@extends('front.layouts.index',['title'=>'نتائج البحث'])
@section('content')


    <div class="container">

        <div class="content">




                <div class="col-lg-8">
                    <div class="layout-header">
                        <h3 class="header-link link-9"> <a>نتائج البحث</a></h3>
                    </div>
                    </div>
                    </div>

        @if (count($news)>0)
                    @foreach($news as $new)
                        <div class="entry-box entry-box-4 d-flex  no-gutters overlay-box box-4">
                            <div class="thumb overlay-box col-auto"><a href="{{route('new',$new->slug)}}">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{image_url($new->image,'250x180')}}">
                                        <source media="(max-width: 41px)" srcset="{{image_url($new->image,'250x180')}}">
                                        <img src="{{image_url($new->image,'250x180')}}" alt="">
                                    </picture></a>
                            </div>

                            <div class="entry-title col p-3">
                                <h3 class="title font-size-16 font-size-md-20 pt-sm-4 mb-2">
                                    <a href="{{route('new',$new->slug)}}">{{$new->title}}</a></h3>

                                <h7 class="info">{!! $new->description !!}</h7> </div>
                        </div>


                   @endforeach



        @else


                <div class="titlePage">
                    <h3>لا يوجد نتائج !</h3>
                </div>


                @endif


    </div>


@stop
