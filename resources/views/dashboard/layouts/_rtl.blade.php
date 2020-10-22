<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
        class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

            <li class="m-menu__item  " aria-haspopup="true">
                <a href="{{route('dashboard.home')}}"
                   href="" class="m-menu__link ">
                    <i   class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span  class="m-menu__link-wrap">
                            <span  class="m-menu__link-text">الرئيسية</span>
									<span class="m-menu__link-badge"></span>
                        </span>
                    </span>
                </a>
            </li>



            <li class="m-menu__item " aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i>
                    <span class="m-menu__link-text ">الأخبار</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu " m-hidden-height="80" style=""><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.news.all')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">عرض الكل</span>
                            </a>
                        </li>
                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.news.create')}}" class="m-menu__link ">
                                <i  class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">إضافة</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{route('dashboard.category.all')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">تصنيفات الاخبار</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>



            <li class="m-menu__item  " aria-haspopup="true">
                <a href="{{route('dashboard.mail.all')}}" class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-envelope"></i>
                    <span  class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">رسائل الزوار</span>

                        <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--danger">
                                    {{ mail_count() }}
                                </span>
                            </span>

                        </span>
                    </span>
                </a>
            </li>





            <li class="m-menu__item " aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="fa fa-video" style="color: #525672"></i>
                    <span class="m-menu__link-text" style="padding-right: 32px" > مكتبة الفيديوهات</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu " m-hidden-height="80" style=""><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.video.all')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">عرض الكل</span>
                            </a>
                        </li>
                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.video.create')}}" class="m-menu__link ">
                                <i  class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">إضافة</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="m-menu__item " aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">

                    <i   style="" class="m-menu__link-icon fa fa-users"></i>
                    <span class="m-menu__link-text">مستخدمي اللوحة</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu " m-hidden-height="80" style=""><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.admins.all')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">عرض الكل</span>
                            </a>
                        </li>

                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.admin.create')}}" class="m-menu__link ">
                                <i  class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">إضافة</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>





            <li class="m-menu__item">

                <a href="{{route('dashboard.roles.all')}}" class="m-menu__link ">
                    <i style="" class="m-menu__link-icon fa fa-check-double"></i>

                    <span class="m-menu__link-text">الصلاحيات</span>
                </a>

            </li>
            <li class="m-menu__item " aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i>
                    <span class="m-menu__link-text ">صفحات الموقع</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu " m-hidden-height="80" style=""><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.page.all')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">عرض الكل</span>
                            </a>
                        </li>
                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{route('dashboard.page.create')}}" class="m-menu__link ">
                                <i  class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">إضافة</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>


            <li class="m-menu__item">

                <a href="{{route('dashboard.settings.index')}}" class="m-menu__link ">
                    <i style="" class="m-menu__link-icon fa fa-wrench"></i>
                    <span class="m-menu__link-text">الإعدادت</span>
                </a>

            </li>





        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->
