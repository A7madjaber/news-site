@extends('dashboard.layouts.index',['title'=>'الصلاحيات'])
@section('main')
    @push('dashboard_css')
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    @endpush




    <div class="row">
        <div class="col-lg-12">
            <div class="m-portlet m-portlet--tab">

                <div class="m-portlet__body">
                    <div class="form-group m-form__group row align-items-center">
                        <div class="col-md-4">
                            <div class="m-input-icon m-input-icon--left">
                                <input type="text" class="form-control m-input" placeholder="بحث..." id="generalSearch">
                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>

                        <div class="m-portlet__body">
                            <div class="m-portlet__head-title col-sm-12">

                                <a href="{{route('dashboard.role.create')}}"> <button class="btn btn-primary col-sm-12" style="border-radius: 20px;"> اضافة صلاحية جديدة</button></a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="my_datatable"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('dashboard_js')
        <script src="{{asset('dashboard\js\datatables.bundle.js')}}"></script>

        <script src="{{asset('dashboard \js\mdatatables.js')}}"></script>
        <script>
            window.data_url = '{{route('dashboard.roles.all.datatable')}}';
            window.columns = [{


                field: "id",
                title: "#",

                sortable: true,
                width: 40,
            },
                {
                    field: "name",
                    title: "الاسم",
                },

                {
                    field: "created_at",
                    title: "التاريخ ",
                },

                {
                    field: "action",
                    title: "خيارات",

                }];
        </script>


    @endpush

@stop
