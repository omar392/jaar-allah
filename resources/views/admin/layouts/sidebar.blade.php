        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">القائمة</li>
                        <li>
                            <a href="{{route('adminhome')}}" class="waves-effect">
                                <i class="icon-accelerator"></i><span style="font-family: cairo;"> الرئيسية </span>
                            </a>
                        </li>
                        @if(Auth::guard('admin')->user()->hasPermission('admins-read'))
                        <li>
                            <a href="{{route('admins.index')}}" class="waves-effect">
                                <i class="fas fa-user-tag"></i><span style="font-family: cairo;">المديرين</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('roles-read'))
                        <li>
                            <a href="{{route('roles.index')}}" class="waves-effect">
                                <i class="fas fa-user-lock"></i><span style="font-family: cairo;">الصلاحيات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('banners-read'))
                        <li>
                            <a href="{{route('banner.index')}}" class="waves-effect">
                                <i class="far fa-images"></i><span style="font-family: cairo;">البنرات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('blogs-read'))
                        <li>
                            <a href="{{route('blog.index')}}" class="waves-effect">
                                <i class="far fa-edit"></i><span style="font-family: cairo;">  المدونة والمقالات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('news-read'))
                        <li>
                            <a href="{{route('new.index')}}" class="waves-effect">
                                <i class="fas fa-envelope-square"></i><span style="font-family: cairo;">قرارات و اخبار سريعة</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('issues-read'))
                        <li>
                            <a href="{{route('issue.index')}}" class="waves-effect">
                                <i class="fab fa-quinscape"></i><span style="font-family: cairo;">المرافعات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('decisions-read'))
                        <li>
                            <a href="{{route('decision.index')}}" class="waves-effect">
                                <i class="fas fa-clipboard-check"></i><span style="font-family: cairo;">قرارات مجلس الأمة</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('galleries-read'))
                        <li>
                            <a href="{{route('gallery.index')}}" class="waves-effect">
                                <i class="far fa-images"></i><span style="font-family: cairo;">معرض الصور</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('customers-read'))
                        <li>
                            <a href="{{route('customer.index')}}" class="waves-effect">
                                <i class="fas fa-tasks"></i><span style="font-family: cairo;">العملاء</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('services-read'))
                        <li>
                            <a href="{{route('service.index')}}" class="waves-effect">
                                <i class="fas fa-check-circle"></i><span style="font-family: cairo;">الخدمات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('opinions-read'))
                        <li>
                            <a href="{{route('opinion.index')}}" class="waves-effect">
                                <i class="fas fa-crown"></i><span style="font-family: cairo;">أراء الجمهور</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('faqs-read'))
                        <li>
                            <a href="{{route('faq.index')}}" class="waves-effect">
                                <i class="fas fa-question"></i><span style="font-family: cairo;">الاسئلة الشائعة</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('terms-read'))
                        <li>
                            <a href="{{route('term.index')}}" class="waves-effect">
                                <i class="fas fa-user-friends"></i><span style="font-family: cairo;">  القيم الحاكمة  </span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('teams-read'))
                        <li>
                            <a href="{{route('team.index')}}" class="waves-effect">
                                <i class="fas fa-user-friends"></i><span style="font-family: cairo;"> فريق العمل  </span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('abouts-read'))
                        <li>
                            <a href="{{route('about')}}" class="waves-effect">
                                <i class="fas fa-home"></i><span style="font-family: cairo;">تعرف علينا</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('settings-read'))
                        <li>
                            <a href="{{route('setting')}}" class="waves-effect">
                                <i class="fas fa-cog"></i><span style="font-family: cairo;">الاعدادت العامة</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('counters-read'))
                        <li>
                            <a href="{{route('counter')}}" class="waves-effect">
                                <i class="fas fa-sort-amount-down"></i><span style="font-family: cairo;">الاحصائيات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('seos-read'))
                        <li>
                            <a href="{{route('seo')}}" class="waves-effect">
                                <i class="fas fa-search"></i><span style="font-family: cairo;">إعدادات محركات البحث</span>
                            </a>
                        </li>
                        @endif
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->