<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
    <div class="m-stack__item m-topbar__nav-wrapper">
        <ul class="m-topbar__nav m-nav m-nav--inline">

            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                <a href="#" class="m-nav__link m-dropdown__toggle">
                    <span class="m-topbar__userpic">
                        <img src="{{  Auth::user()->image ?  image_url(Auth::user()->image )  : asset('images/user_male2-512.png')  }}
                            " class="m--img-rounded m--marginless" alt="">
                    </span>

                </a>
                <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__header m--align-center">
                            <div class="m-card-user m-card-user--skin-dark">
                                <div class="m-card-user__pic">
                                    <img src="{{  Auth::user()->image ?  image_url(Auth::user()->image )  :  asset('images/user_male2-512.png')  }}
                                        " class="m--img-rounded m--marginless" alt="">



                                    <!--
<span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
-->
                                </div>
                                <div class="m-card-user__details">
                                    <span class="m-card-user__name m--font-weight-500">  {{ Auth::user()->name }}</span>
                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">  {{ Auth::user()->email }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav m-nav--skin-light">
                                    <li class="m-nav__section m--hide">
                                        <span class="m-nav__section-text">Section</span>
                                    </li>
                                    <li class="m-nav__item">



                                            <a href="{{route('dashboard.profile.show')}} " class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                            <span class="m-nav__link-title">
                                                <span class="m-nav__link-wrap">
                                                    <span class="m-nav__link-text">الملف الشخصي</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>


                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>

                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                        <a href="" class="btn m-btn--pill   btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">تسجيل الخروج</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="BjLz0mzUnx7g1QysDsOqFz1UZhjcMwfzSsI4aNcq">                                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>







