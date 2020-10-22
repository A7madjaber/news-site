    @extends('dashboard.layouts.index',['title'=>'صلاحية جديدة'])
    @section('main')
        @push('dashboard_css')
            <link href="{{asset('dashboard/css/prettyPhoto.css')}}" rel="stylesheet">
            <link href="{{asset('dashboard/css/jasny-bootstrap.min.css')}}" rel="stylesheet">
            <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="{{asset('dashboard/css/jquery.tagsinput.css')}}">

            <script src="{{asset('dashboard/js/select2.js')}}"></script>

        @endpush



        <form method="POST" action="{{route('dashboard.role.store')}}" accept-charset="UTF-8">
           @csrf

            <div class="row">
            <div class="col-lg-8">
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    إضافة صلاحية
                                </h3>
                            </div>
                        </div>
                    </div>



                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">اسم الصلاحية </label>
                            <div class="col-9">
                                <input  class="form-control m-input " name="name" type="text" id="example-text-input" value="{{old('name')}}">
                            </div>
                        </div>




                        <div class="form-group m-form__group row mb-25">
                            <label for="example-text-input" class="col-3 col-form-label">الصلاحيات</label>
                            <div class="col-9">

                                <table  class="table table-hover">

                                    <thead>

                                    <tr>

                                        <th >امكانية الوصول</th>
                                        <th>صلاحيات </th>
                                    </tr>
                                    </thead>

                                    <tbody>


                                    @php
                                        $models=['categories'=>'التصنيف','news'=>'الأخبار'
                                        ,'Roles'=>'الصلاحيات','videos'=>'الفيديوهات','galleries'=>'الصور'
                                        ,'settings'=>'الاعدادات','mails'=>'الرسائل','pages'=>'صفحات الموقع'];
                                    @endphp
                                    <tr>
                                        @foreach ($models as $key => $model)

                                            <td class="text-capitalize">{{$model}}</td>
                                            <td>
                                                @php

                                                    $Permissions_maps=['create'=>'اضافة','read'=>'قراءة','update'=>'تعديل','delete'=>'حذف'];

                                                @endphp

                                                @if($key=='settings')
                                                    @php
                                                        $Permissions_maps=['read'=>'قراءة','update'=>'تعديل'];
                                                    @endphp
                                                @endif


                                            @if($key=='mails')
                                                    @php
                                                        $Permissions_maps=['read'=>'قراءة','delete'=>'حذف','create'=>'اضافة'];
                                                    @endphp
                                                @endif





                                                <select name="permissions[]" class="form-control select2" multiple>

                                                    @foreach($Permissions_maps as $value=> $Permission_map)
                                                        <option value="{{$value . '_' . $key}}">{{$Permission_map}}</option>
                                                    @endforeach

                                                </select>




                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>



            </div>




        <div class="col-lg-4">
            <div class="m-portlet m-portlet--tab mb-25">

                <div class="m-portlet__body">
                    <div class="m-portlet__head-title col-sm-12">
                        <button type="submit" class="btn btn-success col-sm-12">حفظ</button>
                    </div>
                </div>

            </div>





            </div>


            </div>
        </form>

    @stop

