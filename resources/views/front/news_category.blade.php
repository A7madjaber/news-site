@extends('front.layouts.index',['title'=>$category])
@section('content')
    <div class="pageContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="layout-header">
                        <h3 class="header-link link-9"> <a>{{$category}}</a></h3>
                    </div>

                    @foreach($news as $new)
                    <div class="entry-box entry-box-4 d-flex  no-gutters overlay-box box-4">

                        <div class="entry-title col p-3">
                            <h3 class="title font-size-16 font-size-md-20 pt-sm-4 mb-2"> <a href="#">{{$new->title}}</a></h3>
                            <p class="info">{{$new->description}}</p>
                        </div>
                    </div>
                    @endforeach


                    <div class="col-lg-12">
                        <ul class="pagination justify-content-center">
                            {{$news->links()}}

                        </ul>
                    </div>

                </div>


            @include('front.layouts._mostViews_nav')

            </div>
        </div>
    </div>
@stop
