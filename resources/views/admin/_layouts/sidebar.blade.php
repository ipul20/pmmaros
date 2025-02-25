<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="#" class="brand-logo">
            <img src="{{ asset('landing/images/logo-ipm.png') }}" alt="" style="width: 200px;">
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">

                <li class="menu-item" aria-haspopup="true">
                    <a href="{{url('/admin/dashboard')}}" class="menu-link">
                        <span class="svg-icon menu-icon">
                              <i class="flaticon-home-1 @stack('dashboard')"></i>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Main</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>


                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="{{ url('/admin/user') }}" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon2-user"></i>
                            </span>
                            <span class="menu-text">User</span>
                        </a>
                       
                    </li>
                    
                    
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="{{ url('/admin/banner') }}" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon-logout"></i>
                            </span>
                            <span class="menu-text">Banner</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-submenu {{ request()->is('admin/agenda') ? ' menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="{{ url('/admin/agenda') }}" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon2-calendar-9"></i>
                            </span>
                            <span class="menu-text">Agenda</span>
                        </a>
                    </li>
                   
                    <li class="menu-item menu-item-submenu {{ request()->is('admin/artikel') ? ' menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="{{ url('/admin/artikel') }}" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon2-document"></i>
                            </span>
                            <span class="menu-text">Artikel</span>
                        </a>
                    </li>
                    
                    <li class="menu-item menu-item-submenu @stack('pemeriksaan')" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon-suitcase"></i>
                            </span>
                            <span class="menu-text">Dokumen</span>
                            <i class="menu-arrow"></i>
                        </a>
                       
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Dokumen</span>
                                </span>
                                </li>
                                <li class="menu-item  {{ request()->is('admin/kategori') ? ' menu-item-active' : ''}}" aria-haspopup="true">
                                    <a href="{{ url('/admin/kategori') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Kategori Dokumen</span>
                                    </a>
                                </li>
                                <li class="menu-item  {{ request()->is('admin/dokumen') ? ' menu-item-active' : ''}}" aria-haspopup="true">
                                    <a href="{{ url('/admin/dokumen') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Dokumen</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                     <li class="menu-item menu-item-submenu {{ request()->is('admin/agenda') ? ' menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="https://www.appsheet.com/start/4f6023d7-ec42-43e5-a6dc-e3f46bbafac7#appName=AplikasiBMNApp-5098000&group=%5B%5D&sort=%5B%5D&table=Menu+Pemeriksaan+Aset&view=Home" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon2-calendar-9"></i>
                            </span>
                            <span class="menu-text">Sipan</span>
                        </a>
                    </li>
                    {{-- <li class="menu-item menu-item-submenu @stack('pemeriksaan')" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon-suitcase"></i>
                            </span>
                            <span class="menu-text">Sipan</span>
                            <i class="menu-arrow"></i>
                        </a>
                       
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                
                                <li class="menu-item  {{ request()->is('admin/ruangan') ? ' menu-item-active' : ''}}" aria-haspopup="true">
                                    <a href="{{ url('/admin/ruangan') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Ruangan</span>
                                    </a>
                                </li>
                                <li class="menu-item  {{ request()->is('admin/aset') ? ' menu-item-active' : ''}}" aria-haspopup="true">
                                    <a href="{{ url('/admin/aset') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Daftar Aset</span>
                                    </a>
                                </li>
                                <li class="menu-item  {{ request()->is('admin/laporan-kerusakan') ? ' menu-item-active' : ''}}" aria-haspopup="true">
                                    <a href="{{ url('/admin/laporan-kerusakan') }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">Laporan Kerusakan</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li> --}}
                    

                    
                    

                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="{{ route('logout') }}" class="menu-link menu-toggle" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="svg-icon menu-icon">
                                <i class="flaticon-logout"></i>
                            </span>
                            <span class="menu-text">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
