<!DOCTYPE html>


<html lang="ar" direction="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href="{{image_url(icon())}}">

    <title> لوحة التحكم | {{@$title}}</title>



    <title>لوحة التحكم</title>

    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->



    @include('dashboard.layouts._css')

</head>

<!-- end::Head -->


<!-- begin::Body -->
<body

    class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

@include('dashboard.layouts._header')


<!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        @include('dashboard.layouts._rtl')

        <div class="m-grid__item m-grid__item--fluid m-wrapper">


            <div class="m-content">

                @include('dashboard.partials.errors')
                @include('dashboard.partials.success')

                @yield('main')

            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->


    <!-- end::Footer -->
</div>

<!-- end:: Page -->



<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->




@include('dashboard.layouts._js')

<script>
    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });


</script>
</body>

<!-- end::Body -->
</html>
