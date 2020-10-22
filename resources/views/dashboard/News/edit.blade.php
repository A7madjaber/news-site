    @extends('dashboard.layouts.index',['title'=>'تعديل خبر'])
    @section('main')
        @push('dashboard_css')
            <link href="{{asset('dashboard/css/prettyPhoto.css')}}" rel="stylesheet">
            <link href="{{asset('dashboard/css/jasny-bootstrap.min.css')}}" rel="stylesheet">
            <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="{{asset('dashboard/css/jquery.tagsinput.css')}}">
        @endpush
        <!--begin::Form-->


        <form method="POST" action="{{route('dashboard.news.update',[$new->id])}}" accept-charset="UTF-8">

         @csrf

        <div class="row">
            <div class="col-lg-8">
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                   تعديل الخبر
                                </h3>
                            </div>
                        </div>
                    </div>



                    <div class="m-portlet__body">




                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">عنوان الخبر</label>
                            <div class="col-9">
                                <input required="required" class="form-control m-input " name="title" type="text" id="example-text-input" value="{{old('title',$new->title)}}">

                            </div>

                        </div>


                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">وصف الخبر (مقتطف)</label>
                            <div class="col-9">
                                <input required="required" class="form-control m-input " name="description" type="text" id="example-text-input" value="{{old('description',$new->description)}}">

                            </div>

                        </div>



                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">كلمات دلالية</label>
                            <div class="col-9">
                                <input name="tags" id="tags" class="form-control m-input"value="{{old('tags',$new->tags)}}"
                                       placeholder="الكلمات المفتاحية"/>
                            </div>
                        </div>

                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">تفاصيل الخبر</label>
                            <textarea id="m_summernote_1" name="details" class="form-control summernote" rows="30" style="display: none;">"{{old('details',$new->details)}}</textarea>

                        </div>
                    </div>
                </div>
            </div>

        </form>





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
                        <div class="fileinput fileinput-$new" data-provides="fileinput">
                            <div id="jasny_progress" class="progress hidden">
                                <div id="jasny_percent"
                                     class="progress-bar progress-bar-striped progress-bar-animated  bg-success"
                                     role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                            <div class="fileinput-$new thumbnail"
                                 style="width: 250px; height: 250px;max-width:250px; max-height:250px">
                                <img src="{{image_url($new->image)}}" data-src="holder.js/100%x100%"
                                     alt="">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"
                                 style="max-width: 325px;
 max-height: 300px;"></div>
                            <div>
                                <span class="btn btn-default btn-file" style="width: 100%">
                                    <span class="fileinput-$new">إختيار صورة</span>
                                    <span class="fileinput-exists">تغيير الصورة</span>
                                    <input type="file" class="fileupload">
                                </span>
                            </div>
                        </div>
                    </form>


                    <div style="margin-top: 20px" class="m-form__group form-group">
                        <label>اختيار تصنيف الخبر</label>

                        <div class="m-checkbox-list">
                            @foreach($categories as $Category)


                                <label class="m-checkbox m-checkbox--success">
                                    <input  multiple="multiple" name="categoryid[]" value="{{$Category->id}}" type="checkbox">{{$Category->name}}
                                    <span></span>


                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>



            </div>


            <input id="image" name="image" hidden value="{{old('image',$new->image)}}">

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
