@extends('dashboard.layouts.index',['title'=>'تعديل التصنيف'])
@section('main')
    @push('dashboard_cssr')
        <link href="{{asset('dashboard/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('dashboard/css/jasny-bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    @endpush
    <!--begin::Form-->


    <form method="POST" action="{{route('dashboard.category.update',$category->id)}}" accept-charset="UTF-8"  enctype="multipart/form-data">
      @csrf


    <div class="row">
        <div class="col-lg-8">
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                               تعديل التصنيف
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="m-portlet__body">

                    <div class="form-group m-form__group row mb-25">
                        <label for="example-text-input" class="col-3 col-form-label">اسم التصنيف</label>
                        <div class="col-9">
                            <input class="form-control m-input " name="name" type="text" id="example-text-input" value="{{$category->name}}">

                        </div>

                        </div>
                    </div>


                </div>
            </div>

        <div class="col-lg-4">
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__body">
                    <div class="m-portlet__head-title col-sm-12">
                        <button type="submit" class="btn btn-success col-sm-12">حفظ</button>
                    </div>
                </div>
            </div>


    </div>

    </div>
    </form>


    @push('dashboard_js')
        <script src="{{asset('/dashboard/js/jasny-bootstrap.min.js')}}"></script>
        <script src="{{asset('/dashboard/js/jasny.js')}}"></script>
        <script src="{{asset('dashboard/js/post.js')}}"></script>

        <script src="{{asset('dashboard\assets\vendors\custom\datatables\datatables.bundle.js')}}"></script>

        <script src="{{asset('dashboard\js\mdatatables.js')}}"></script>
        <script>

    @endpush

@stop
