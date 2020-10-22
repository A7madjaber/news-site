{{--    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">--}}
<!--end::Web font -->

<!--begin:: Global Mandatory Vendors -->
<link href={{asset('dashboard/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.rtl.css')}} rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href={{asset('dashboard/assets/vendors/tether/dist/css/tether.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-select/dist/css/bootstrap-select.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/select2/dist/css/select2.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/nouislider/distribute/nouislider.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/owl.carousel/dist/assets/owl.carousel.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/owl.carousel/dist/assets/owl.theme.default.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/ion-rangeslider/css/ion.rangeSlider.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/dropzone/dist/dropzone.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/summernote/dist/summernote.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/animate.css/animate.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/toastr/build/toastr.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/jstree/dist/themes/default/style.css')}} rel="stylesheet" type="text/css" />
{{--    <link href={{asset('dashboard/assets/vendors/morris.js/morris.css')}} rel="stylesheet" type="text/css" />--}}
<link href={{asset('dashboard/assets/vendors/chartist/dist/chartist.min.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/sweetalert2/dist/sweetalert2.min.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/socicon/css/socicon.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/vendors/line-awesome/css/line-awesome.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/vendors/flaticon/css/flaticon.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/vendors/metronic/css/styles.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('dashboard/assets/vendors/vendors/fontawesome5/css/all.min.css')}} rel="stylesheet" type="text/css" />

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles -->
{{--<link href={{asset('dashboard/assets/demo/base/style.bundle.css')}} rel="stylesheet" type="text/css" />--}}

<link href={{asset('dashboard/assets/demo/base/style.bundle.rtl.css')}} rel="stylesheet" type="text/css" />

<!--end::Page Vendors Styles -->
{{--<link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>--}}

{{--<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">--}}

<style>
    html, body {
        font-family: 'Droid.Arabic.Kufi', serif;
    }
    .hidden {
        display:  none !important;
    }
    .btn-icon i{
        font-size: 12px !important;
        font-weight: 500!important;
    }
    .fileinput-new .thumbnail{
        width: 100% !important;
        max-width: 100% !important;
    }
    @font-face{
        font-family: 'Droid.Arabic.Kufi';
        src: url(/dashboard/fonts/Droid.Arabic.Kufi.ttf)
    }

    body,.btn,.m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text,.form-control,.m-subheader .m-subheader__title,
    div.tagsinput input,div.tagsinput span.tag{
        font-family: 'Droid.Arabic.Kufi' !important;
    }

    .m-subheader {
        padding: 16px 20px;
    }

    .bl-0{
        border-left: 0px !important
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #5d6181;
        border-color: #5d6181;
    }
    table thead th{
        background: #f4f3f8;
        padding: 15px 15px!important
    }

    table thead td{
        padding: 10px 0px !important
    }

    table tbody tr:nth-child(even) td{
        background: #faf9fc;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    table tbody tr:hover{
        background: #f7f6fa
    }


    .w-65{
        width: 65px;
    }

    .h-30{
        height: 30px;
    }

    .fs-10{
        font-size: 10px !important
    }

    .fs-12{
        font-size: 12px !important
    }

    .m-checkbox>span:after {
        transform: rotate(45deg);
    }

    .m-aside-menu .m-menu__nav>.m-menu__item>.m-menu__link {
        padding: 9px 20px;
    }

    .mb-0
    {
        margin-bottom: 0px
    }

    .m-widget28 .m-widget28__container .m-widget28__nav-items{
        display: inline-flex;
    }

    .m-widget28 .m-widget28__pic {
        background-color: #ffffff;
    }

    .m-portlet__head-text.m--font-light{
        color: #000 !important
    }


    .pagination{
        padding: 10px 15px 20px;
    }

    .col-form-label{
        font-size: 12px
    }

    ::placeholder{
        font-size: 12px
    }

    .dz-hidden-input{
        direction: ltr
    }

    @media (min-width: 1025px){
        .m-dropdown.m-dropdown--align-center.m-dropdown--large .m-dropdown__wrapper {
            width: 300px;
        }
    }

    .m-dropdown.m-dropdown--align-center .m-dropdown__wrapper {
        margin-right: -182.5px;
    }

    .m-dropdown.m-dropdown--arrow .m-dropdown__arrow {
        position: absolute;
        line-height: 0;
        display: inline-block;
        overflow: hidden;
        height: 11px;
        width: 40px;
        position: relative;
        right: 50%;
        margin-right: 10px;
        top: 0;
        position: absolute;
    }

    .m-subheader .m-subheader__breadcrumbs.m-nav>.m-nav__item>.m-nav__link>.m-nav__link-text {
        color: #898b96;
        font-size: 12px;
    }
    .m-subheader .m-subheader__title {

        font-size: 1.25rem;
    }
    div.tagsinput span.tag {

        font-size: 10px;
    }


    .p-20{
        padding: .85rem 1.15rem;
    }

    .mb-40{
        margin-bottom: 40px
    }

    .m-list-badge__items li{
        list-style: none;
        margin-bottom: 15px;
    }
    .m-list-badge .m-list-badge__items .m-list-badge__item{
        margin-left: auto
    }



    ul{
        padding: 0;
        margin: 0;
    }

    .nav-link.m-tabs__link{
        font-size: 12px;
        padding-left: 10px!important;
        padding-right: 10px!important
    }

    .mb-25{
        margin-bottom: 25px
    }
    .p-0{
        padding: 0px;
    }

    .h-3rem{
        height: 3rem !important;
    }

    .f-s-12{
        font-size: 12px
    }
    .p-15{
        padding: 12px;
    }


    div.tagsinput span.tag {
        float: right;
        list-style: disc outside none;
    }
    div.tagsinput div {
        float: right;
    }

    div.tagsinput span.tag {
        border: 1px solid #2c2e3e;
        background: #2c2e3e;
        color: #ffffff;
    }

    div.tagsinput span.tag a{
        color: #ffffff;
    }

    fieldset{
        padding: 20px!important;
        border: 1px solid #ebedf2!important;
        margin-bottom: 50px
    }

    legend {
        width: 0%;
    }

    legend label{
        background: #FFF;
        display: block
    }

    fieldset .m-checkbox>span.first{
        background: #FFF;
        right: -21px;
        top: -6px;
    }


    .pagination>li>.page-link {
        border-radius: 50%;
        cursor: pointer;
        display: inline-block;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -moz-justify-content: center;
        -ms-justify-content: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -moz-align-items: center;
        -ms-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
        vertical-align: middle;
        height: 2.25rem;
        min-width: 2.25rem;
        vertical-align: middle;
        padding: 0.5rem;
        text-align: center;
        position: relative;
        font-size: 1rem;
        line-height: 1rem;
        font-weight: 400;
    }
    .page-link i{
        font-size: 1rem
    }

    .page-link.active{
        background: #716aca;
        color: #fff !important;
    }

    .page-link:hover{
        background: #716aca;
        color: #fff !important;
    }

    .pagination>li {
        padding: 0;
        margin-right: 7px;
        display: inline-block;
    }

    .m-dropdown .m-dropdown__wrapper {
        width: 200px;
    }

    .lh{
        line-height: 3
    }


    .co-000{
        color: #000 !important
    }



    div.tagsinput {
        border-color: #ebedf2 !important
    }

    @media(max-width:576px){
        table {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        table th,table td{
            min-width: 120px
        }
    }

    .hidden{
        display: none!important;
    }

    .info {
        color: #56ace0;
    }

    .success {
        color: #39c44c;
    }

    .warning {
        color: #ff9438;
    }

    .error {
        color: #f27676;
    }












    .inbox {
        background: #FFF;
        padding: 20px;
    }

    .inbox .pagination-control {
        text-align: left
    }

    .inbox .compose-btn {
        color: #fff;
        text-shadow: none;
        text-align: center;
        margin-bottom: 18px;
        background: #35aa47;
    }

    .inbox .inbox-nav {
        padding: 0px;
    }

    .inbox .inbox-nav > li {
        list-style: none
    }

    .inbox .inbox-nav li a {
        color: #4d82a3;
        display: block;
        font-size: 15px;
        border-left: none;
        text-align: right !important;
        padding: 8px 14px;
        margin-bottom: 1px;
        background: #f4f9fd;
    }

    .inbox .inbox-nav li:hover a {
        color: #4d82a3;
        background: #eef4f7 !important;
        text-decoration: none;
    }

    .inbox .inbox-nav li.active a, .inbox .inbox-nav li.active:hover a {
        color: #fff;
        border-left: none;
        background: #169ef4 !important;
        text-decoration: none;
    }

    .inbox .inbox-nav > li > a .badge {
        float: left;
        margin-top: 1px;
    }

    .badge-success {
        background-color: #36c6d3;
    }

    .badge {
        font-size: 11px !important;
        font-weight: 300;
        height: 18px;
        color: #fff;
        padding: 3px 6px;
        -webkit-border-radius: 12px !important;
        -moz-border-radius: 12px !important;
        border-radius: 12px !important;
        text-shadow: none !important;
        text-align: center;
        vertical-align: middle;
    }

    .inbox .inbox-header h1 {
        color: #666;
        font-size: 24px;
        margin: 0 0 20px;
    }

    .inbox .inbox-header form {
        margin: 0 0 20px;
    }

    .inbox .table td, .inbox .table th {
        border: none;
    }

    .inbox .pagination-control .pagination-info {
        display: inline-block;
        padding-right: 10px;
        font-size: 14px;
        line-height: 14px;
    }

    .inbox .btn.btn-outline.blue {
        border-color: #3598dc;
        color: #ffffff;
        background: 0 0;
        border-radius: 0px;
        background-color: #3598dc;
        padding: 5px 10px;
    }

    .inbox .btn.btn-outline.blue.dropdown-toggle {
        border-color: #3598dc;
        color: #ffffff;
        background: 0 0;
        border-radius: 0px;
        background-color: #3598dc;
        padding: 5px 20px;
    }

    .inbox .btn.btn-outline.blue.dropdown-toggle i {
        padding-right: 5px;
        transform: translateX(-10px) translateY(1px);
    }

    .inbox .table .btn {
        margin-top: 0;
        margin-left: 0;
        margin-right: 5px;
    }

    .inbox .table thead th {
        border: 0;
        border-bottom: solid 5px #fff;
    }

    .inbox .table-striped tbody > tr:nth-child(odd) > td {

        cursor: pointer;
        padding: 8px;
        vertical-align: middle;
    }

    .inbox .table-striped tbody > tr:nth-child(even) > td {

        cursor: pointer;
        padding: 8px;
        vertical-align: middle;
    }

    .inbox tr i.inbox-started {
        color: #fd7b12;
    }

    .inbox .fa-star {
        cursor: pointer;
    }

    .inbox td {
        padding: 15px;
    }

    .inbox .nav-link.dropdown-toggle:after, .btn.dropdown-toggle:after {
        display: none
    }

    .inbox .green.btn {
        color: #FFFFFF;
        background-color: #26a69a;
    }

    .m-checkbox > span:after {
        transform: rotate(45deg)
    }

    .m-checkbox > span {
        top: -3px;
    }

    .inbox .view-message a {
        color: #000;
    }

    .inbox .view-message a:hover {
        text-decoration: none
    }


    /*view mail*/



    .inbox {
        background: #FFF;
        padding: 20px;
    }

    .inbox .pagination-control{
        text-align: left
    }
    .inbox .compose-btn {
        color: #fff;
        text-shadow: none;
        text-align: center;
        margin-bottom: 18px;
        background: #35aa47;
    }
    .inbox .inbox-nav{
        padding: 0px;
    }
    .inbox .inbox-nav>li{
        list-style: none
    }
    .inbox .inbox-nav li a {
        color: #4d82a3;
        display: block;
        font-size: 15px;
        border-left: none;
        text-align: right !important;
        padding: 8px 14px;
        margin-bottom: 1px;
        background: #f4f9fd;
    }
    .inbox .inbox-nav li:hover a {
        color: #4d82a3;
        background: #eef4f7 !important;
        text-decoration: none;
    }
    .inbox .inbox-nav li.active a, .inbox .inbox-nav li.active:hover a {
        color: #fff;
        border-left: none;
        background: #169ef4 !important;
        text-decoration: none;
    }
    .inbox .inbox-nav>li>a .badge {
        float: left;
        margin-top: 1px;
    }
    .badge-success {
        background-color: #36c6d3;
    }
    .badge {
        font-size: 11px!important;
        font-weight: 300;
        height: 18px;
        color: #fff;
        padding: 3px 6px;
        -webkit-border-radius: 12px!important;
        -moz-border-radius: 12px!important;
        border-radius: 12px!important;
        text-shadow: none!important;
        text-align: center;
        vertical-align: middle;
    }
    .inbox .inbox-header h1 {
        color: #666;
        font-size: 24px;
        margin: 0 0 20px;
    }

    .inbox .inbox-header form{
        margin: 0 0 20px;
    }

    .inbox .table td, .inbox .table th {
        border: none;
    }
    .inbox .pagination-control .pagination-info {
        display: inline-block;
        padding-right: 10px;
        font-size: 14px;
        line-height: 14px;
    }
    .inbox .btn.btn-outline.blue {
        border-color: #3598dc;
        color: #3598dc;
        background: 0 0;
    }

    .inbox .table .btn {
        margin-top: 0;
        margin-left: 0;
        margin-right: 5px;
    }

    .inbox .table thead th {
        border: 0;
        background: #eef4f7;
        border-bottom: solid 5px #fff;
    }

    .inbox .table-striped tbody > tr:nth-child(odd) > td{
        background: #f8fbfd;
        cursor: pointer;
        padding: 8px;
        vertical-align: middle;
    }

    .inbox .table-striped tbody > tr:nth-child(even) > td{
        background: #ffffff;
        cursor: pointer;
        padding: 8px;
        vertical-align: middle;
    }
    .inbox tr i.inbox-started {
        color: #fd7b12;
    }
    .inbox .table-hover tbody tr:hover > td, .inbox .table-hover tbody tr:hover > th {
        background: #eef4f7;
    }

    .inbox-view-info{
        margin-bottom: 30px;
        border: 1px solid #EEE;
        padding: 10px;
    }
    .inbox-info-btn{
        text-align: left;
    }
    .reply-btn{
        padding: 5px 15px;
        text-align: left;
        color: #FFFFFF;
        background-color: #3598dc;
    }

    .reply-btn i{
        padding-left: 5px
    }
    .avatar-inbox{
        width: 40px;
        border-radius: 50%;
        margin-left: 15px;
    }

    .inbox .inbox-view p{
        line-height: 40px;
        margin-bottom: 20px;
    }
    .fileinput {
        width: 100% !important;
    }

</style>
@stack('dashboard_css')
