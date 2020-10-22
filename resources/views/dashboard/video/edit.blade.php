@extends('dashboard.layouts.index',['title'=>'اضافة فيديو'])
@section('main')
    @push('dashboard_css')
        <link href="{{asset('dashboard/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('dashboard/css/jasny-bootstrap.min.css')}}" rel="stylesheet">
    @endpush
    <!--begin::Form-->


    <form method="POST" action="{{route('dashboard.video.update',[$video->id])}}" accept-charset="UTF-8">
        @csrf



        <div class="row">
            <div class="col-lg-8">
                <div class="m-portlet m-portlet--tabs">
                    <div class="tab-content">

                        <div class="tab-pane active show" id="m_tabs_6_1" role="tabpanel">
                            <div class="m-portlet m-portlet--tab">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group row">
                                        <label for="example-search-input" class="col-3 col-form-label">العنوان</label>
                                        <div class="col-9">
                                            <input class="form-control m-input" type="text" name="name"
                                                   value="{{old('name',$video->name)}}" required>
                                        </div>

                                    </div> <div class="form-group m-form__group row">
                                        <label for="example-search-input" class="col-3 col-form-label">رابط الفيديو [youtube] </label>

                                        <div class="col-9">
                                            <input class="form-control m-input" type="text" name="url"value="{{old('url',$video->url)}}" required>
                                        </div>



                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <div class="col-lg-4">

                <div class="m-portlet m-portlet--tab mb-25">
                    <div class="m-portlet__body">
                        <div class="m-portlet__head-title col-sm-12">
                            <div class="m-login__form-action">
                                <button id="m_login_signin_submit"
                                        class="btn btn-focus m-btn  m-btn--custom m-btn--air m-login__btn m-login__btn--primary col-sm-12"
                                        style="font-family: Mada,sans-serif"> حفظ
                                </button>
                            </div>
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
                                    <img src="{{image_url($video->image)}}"
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


                <input id="image" name="image" hidden value="{{old('image',$video->image)}}">

            </div>

        </div>
    </form>
    {!! Form::close() !!}
    <!--end::Form-->
    @push('dashboard_js')
        <script src="{{asset('dashboard/assets/demo/default/custom/crud/forms/widgets/summernote.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('/dashboard/js/jasny-bootstrap.min.js')}}"></script>
        <script src="{{asset('/dashboard/js/jasny.js')}}"></script>
        <script src="{{asset('/dashboard/js/post.js')}}"></script>


    @endpush
@stop
