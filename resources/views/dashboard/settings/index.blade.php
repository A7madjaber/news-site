@extends('dashboard.layouts.index',['title'=>'اعدادات الموقع'])
@section('main')
    @push('dashboard_css')
        <link rel="stylesheet" href="{{asset('dashboard/css/jquery.tagsinput.css')}}">
        <link href="{{asset('dashboard/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('dashboard/css/jasny-bootstrap.min.css')}}" rel="stylesheet">

    @endpush



    <form method="POST" action="{{route('dashboard.settings.update',[$settings->id])}}" accept-charset="UTF-8">
             @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="m-portlet m-portlet--tabs">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs-line m-tabs-line--success m-tabs-line--2x" role="tablist">
                                <li class="nav-item m-tabs__item ">
                                    <a class="nav-link m-tabs__link  active show" data-toggle="tab" href="#m_portlet_base_demo_1_1_tab_content" role="tab" aria-selected="false">
                                        <i class="flaticon-settings-1"></i> إعدادات الموقع
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_2_tab_content" role="tab" aria-selected="false">
                                        <i class="flaticon-users-1"></i> التواصل الإجتماعي
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="tab-content" style="margin-top: 24px;">
                            <div class="tab-pane  active show" id="m_portlet_base_demo_1_1_tab_content" role="tabpanel">
                                <div class="form-group m-form__group row">
                                    <label for="example-search-input" class="col-3 col-form-label">عنوان الموقع</label>
                                    <div class="col-9">
                                        <input class="form-control m-input" type="text" name="title" value="{{$settings->title}}" placeholder="اسم الموقع">
                                    </div>
                                </div>

                                <div class="form-group m-form__group row mb-25">
                                    <label for="example-text-input" class="col-3 col-form-label">وصف الموقع</label>
                                    <div class="col-9">
                                        <textarea rows="5" class="form-control m-input" name="description" placeholder="" required="">{{$settings->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row mb-25">
                                    <label for="example-text-input" class="col-3 col-form-label">كلمات دلالية</label>
                                    <div class="col-9">
                                        <input name="tags" id="tags" class="form-control m-input" value="{{$settings->tags}}"
                                               placeholder="الكلمات المفتاحية"/>
                                    </div>
                                </div>


                            <div class="form-group m-form__group row">
                                <label  class="col-3 col-form-label">نص حقوق
                                    الملكية</label>
                                <div class="col-9">
                                    <input class="form-control m-input" type="text" name="CopyRight" value="{{$settings->CopyRight}}" placeholder="نص حقوق الملكية">
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-search-input" class=" col-form-label">الأيقونة</label></label>



                                <form id="single" action="{{csrf_token()}}">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div id="jasny_progress" class="progress hidden">
                                            <div id="jasny_percent"
                                                 class="progress-bar progress-bar-striped progress-bar-animated  bg-success"
                                                 role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                        <div class="fileinput-new thumbnail"style="width: 180px; height: 120px;margin-right: -180px">
                                            <img src="{{image_url($settings->icon)}}"
                                                     data-src="holder.js/100%x100%"
                                                 alt="">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"style="width: 180px;height:120px;"></div>


                                        @if(Auth()->user()->hasPermission('update_settings'))

                                        <div>
                                            <span class="btn btn-default btn-file" style="width: 50%;margin-right:200px;margin-top: -100px">
                                                <span class="fileinput">تغيير الصورة</span>
                                                <input type="file" class="fileupload">
                                            </span>
                                        </div>
                                        @endif

                                    </div>

                                    <input id="image" name="icon" hidden value="{{old('icon',$settings->icon)}}">
                                </form>
                            </div>

                            </div>

                            @include('dashboard.settings._social');

                        </div>

                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="m-portlet m-portlet--tab mb-25">
                @if(Auth()->user()->hasPermission('update_settings'))

                <div class="m-portlet__body">
                    <div class="et__head-title col-sm-12">
                        <div class="m-login__form-action">
                            <button  class="btn btn-focus m-btn  m-btn--custom m-btn--air m-login__btn m-login__btn--success col-sm-12" style="font-family: Mada,sans-serif"> حفظ
                            </button>
                        </div>
                    </div>
                </div>

                @else
                    <div class="m-portlet__body">
                        <div class="et__head-title col-sm-12">
                            <div class="m-login__form-action">
                                <button disabled class="btn btn-focus m-btn  m-btn--custom m-btn--air m-login__btn m-login__btn--success col-sm-12" style="font-family: Mada,sans-serif"> حفظ
                                </button>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div>
        </div>

    </form>

     @push('dashboard_js')
        <script src="{{asset('dashboard/js/jquery.tagsinput.js')}}"></script>

        <script>
            jQuery(document).ready(function () {
                jQuery('#tags').tagsInput({
                    width: 'auto',
                    defaultText: 'اضف'
                });
            });
        </script>
        <script src="{{asset('/dashboard/js/jasny-bootstrap.min.js')}}"></script>
        <script src="{{asset('/dashboard/js/jasny.js')}}"></script>
    @endpush

@stop
