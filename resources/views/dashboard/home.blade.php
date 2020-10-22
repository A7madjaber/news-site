@extends('dashboard.layouts.index',['title'=>'الرئيسية'])
@section('main')
    @push('panel_css')
        <style>
            .m-widget24 {
                padding-bottom: 10%;
            }
        </style>
    @endpush
    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl" >
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title"> الأخبار</h4><br>
                            <span class="m-widget24__desc"></span>
                            <span class="m-widget24__stats m--font-brand">{{news_count()}}</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-brand" role="progressbar" style="width:10.{{news_count()}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>
                    </div>

                    <!--end::Total Profit-->
                </div>


                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                تصنيفات الأخبار
                            </h4><br>
                            <span class="m-widget24__desc"></span>
                            <span class="m-widget24__stats m--font-danger">{{categories_count()}}</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-danger" role="progressbar" style="width:10.{{categories_count()}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                             الرسائل
                            </h4><br>
                            <span class="m-widget24__desc"></span>
                            <span class="m-widget24__stats m--font-info">{{mails_count()}}</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-info" role="progressbar"style="width:10.{{mails_count()}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!--end::New Feedbacks-->
                </div>



                <div class="col-md-12 col-lg-6 col-xl-3">
                <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                           الفيديوهات
                            </h4><br>
                            <span class="m-widget24__desc"></span>
                            <span class="m-widget24__stats m--font-success">{{Videos_count()}}</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-success" role="progressbar" style="width:10.{{Videos_count()}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!--end::New Feedbacks-->
                </div>

            </div>
            </div>
        </div>



@stop
