@extends('front.layouts.index',['title'=>$page->name])
@section('content')

    <div class="container">

        <div class="content">
            <div class="titlePage">
                <b> <h3>{{$page->name}}</h3></b>
            </div>

            <p class="text-about">{!! strip_tags($page->Content) !!}</p>

        </div>
    </div>


@stop
