@extends('dashboard.layouts.index',['title'=>'البيانات الشخصية'])
@section('main')
    @push('dashboard_css')
        <link href="{{asset('dashboard/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('dashboard/css/jasny-bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    @endpush
    <!--begin::Form-->


    <form method="POST" action="{{route('dashboard.profile.update',[$profile->id])}}" accept-charset="UTF-8">

        @csrf

        <div class="row">
            <div class="col-lg-8">
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                  تعديل البيانات الشخصية
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">

                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">إسم المستخدم</label>
                            <div class="col-9">
                                <input class="form-control m-input " name="name" type="text" value="{{$profile->name}}" id="example-text-input">

                            </div>
                        </div>

                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">البريد الإلكتروني</label>
                            <div class="col-9">
                                <input class="form-control m-input " name="email" type="email" value="{{$profile->email}}" id="example-text-input">

                            </div>
                        </div>

                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">كلمة المرور</label>
                            <div class="col-9">
                                <input class="form-control m-input " name="password"  type="password" value="" id="example-text-input">
                                @include('dashboard.partials.pass')
                            </div>
                        </div>

                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">تأكيد كلمة المرور</label>
                            <div class="col-9">

                                <input class="form-control m-input" name="password_confirmation" type="password" value="{{$profile->unhash}}"  id="example-text-input">

                            </div>
                        </div>






            </div>
            </div>
            </div>





    <script>



    </script>

    <div class="col-lg-4">
        <div class="m-portlet m-portlet--tab mb-25">

            <div class="m-portlet__body">
                <div class="m-portlet__head-title col-sm-12">
                    <button type="submit" class="btn btn-success col-sm-12">حفظ</button>
                </div>
            </div>

        </div>


        <div class="m-portlet m-portlet--primary m-portlet--head-solid-bg m-portlet--head-sm" m-portlet="true">
            <div class="m-portlet__body">
                <form id="single" action="{{csrf_token()}}">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div id="jasny_progress" class="progress hidden">
                            <div id="jasny_percent"
                                 class="progress-bar progress-bar-striped progress-bar-animated  bg-success"
                                 role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="fileinput-new thumbnail"
                             style="width: 250px; height: 250px;max-width:250px; max-height:250px">
                            <img src="{{image_url($profile->image)}}"
                                 data-src="holder.js/100%x100%"
                                 alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"
                             style="max-width: 325px;
 max-height: 300px;"></div>
                        <div>
                                <span class="btn btn-default btn-file" style="width: 100%">
                                    <span class="fileinput-new">إختيار صورة</span>
                                    <span class="fileinput-exists">تغيير الصورة</span>
                                    <input type="file" class="fileupload">
                                </span>
                        </div>
                    </div>
                </form>


        </div>



    </div>


    <input id="image" name="image" hidden value="{{$profile->image}}">



</div>
</div>
    </form>

    @push('dashboard_js')
        <script src="{{asset('dashboard/js/jquery.tagsinput.js')}}"></script>


        <script src="{{asset('/dashboard/js/jasny-bootstrap.min.js')}}"></script>
        <script src="{{asset('/dashboard/js/jasny.js')}}"></script>
    @endpush

@stop
