<!-- https://themesbrand.com/skote-django/layouts/icons-boxicons.html -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->


            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">القائمة</li>

                    {{--------  Home---------}}
                    <li>
                        <a href="{{route('admin.dashboard')}}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span class="badge rounded-pill bg-info float-end"></span>
                            <span key="t-dashboards">الرئيسية</span>
                        </a>
                    </li>





                <li>
                        <a href="{{route('settings.index')}}" class="waves-effect">
                            <i class="bx bx-wrench"></i>
                            <span class="badge rounded-pill bg-info float-end"></span>
                            <span key="t-dashboards">الإعدادات العامة</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="waves-effect editProfile">
                            <i class="bx bx-user-circle"></i>
                            <span class="badge rounded-pill bg-info float-end"></span>
                            <span key="t-dashboards">الملف الشخصى</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admins.index')}}" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span class="badge rounded-pill bg-info float-end"></span>
                            <span key="t-dashboards">الموظفين </span>
                        </a>
                    </li>

                <li>
                    <a href="{{route('our-services.index')}}" class="waves-effect">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">خدمتنا </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('frequently-questions.index')}}" class="waves-effect">
                        <i class="fa fa-question" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">الاسئلة الشائعة </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('ourWorks.index')}}" class="waves-effect">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">اعمالنا </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('contacts.index')}}" class="waves-effect">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">تواصل معنا </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('reviews.index')}}" class="waves-effect">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">التقيمات </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('statistics.index')}}">
                        <i class="bx bx-pie-chart-alt-2"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards"> الاحصائيات </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('aboutUs.index')}}">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">  معلومات عنا </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('setting.getMapAddress')}}" class="waves-effect">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">الموقع </span>
                    </a>
                </li>



                <li>
                    <a href="{{route('admin.getSteps')}}" class="waves-effect">
                        <i class="fa fa-step-forward" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">خطوات التنفيذ </span>
                    </a>
                </li>



                <li>
                    <a href="{{route('types.index')}}" class="waves-effect">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">الانواع </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
