<!DOCTYPE html>


<html lang="ar">

<!-- begin::Head -->
<head>

    <meta charset="utf-8"/>
    <link rel="icon" href="{{image_url(icon())}}">
    <title>لوحة التحكم | تسجيل دخول</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

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

    @include('dashboard.layouts._css')
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body
    class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div
        class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2"
        id="m_login" style="background-image: url({{asset('panel/assets/app/media/img//bg/bg-3.jpg')}});">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                {{--<div class="m-login__logo">--}}
                {{--<a href="#">--}}
                <img  style="width:120px; margin-right: 160px" src="{{image_url(icon())}}">
                {{--</a>--}}
                {{--</div>--}}
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">تسجيل الدخول للوحة التحكم</h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="m-login__form m-form">
                        @csrf
                        <div class="form-group m-form__group">
                            <input class="form-control m-input {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="البريد الإلكتروني" name="email"
                                   autocomplete="off">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                   placeholder="كلمة المرور" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="m-login__form-action">
                            <button id="m_login_signin_submit" type="submit"
                                    class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                تسجيل الدخول
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

@include('dashboard.layouts._js')

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
