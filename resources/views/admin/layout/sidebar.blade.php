<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Side Navigation</h5>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                {{-- <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li> --}}

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Content Management</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.cms.*') ? 'active' : '' }}">
                        <i class="ph-article-medium"></i>
                        <span>
                            Pages CMS
                        </span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->routeIs('admin.cms.*') ? 'show' : '' }}">
                        <li class="nav-item">
                            <a href="{{ route('admin.cms.slider.index') }}" class="nav-link {{ request()->routeIs('admin.cms.slider.*') ? 'active' : '' }}">Home Slider</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cms.home.index') }}" class="nav-link {{ request()->routeIs('admin.cms.home.*') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cms.about.index') }}" class="nav-link {{ request()->routeIs('admin.cms.about.*') ? 'active' : '' }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cms.team.index') }}" class="nav-link {{ request()->routeIs('admin.cms.team.*') ? 'active' : '' }}">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cms.testimoni.index') }}" class="nav-link {{ request()->routeIs('admin.cms.testimoni.*') ? 'active' : '' }}">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cms.contact.index') }}" class="nav-link {{ request()->routeIs('admin.cms.contact.*') ? 'active' : '' }}">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->routeIs('admin.global.*') ? 'nav-item-expanded' : '' }} {{ request()->routeIs('admin.global.*') ? 'nav-item-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.global.*') ? 'active' : '' }}">
                        <i class="ph-planet"></i>
                        <span>
                            Global Section
                        </span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->routeIs('admin.global.*') ? 'show' : '' }}">
                        <li class="nav-item">
                            <a href="{{ route("admin.global.header.index") }}" class="nav-link {{ request()->routeIs('admin.global.header.*') ? 'active' : '' }}">Header</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.global.footer.index") }}" class="nav-link {{ request()->routeIs('admin.global.footer.*') ? 'active' : '' }}">Footer</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.global.contact_widget.index") }}" class="nav-link {{ request()->routeIs('admin.global.contact_widget.*') ? 'active' : '' }}">Contact Widget</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.global.contact_info.index") }}" class="nav-link {{ request()->routeIs('admin.global.contact_info.*') ? 'active' : '' }}">Contact Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.global.brand_logo.index") }}" class="nav-link {{ request()->routeIs('admin.global.brand_logo.*') ? 'active' : '' }}">Brand Logo</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.global.social_media.index") }}" class="nav-link {{ request()->routeIs('admin.global.social_media.*') ? 'active' : '' }}">Social Media</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Services</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item nav-item-submenu {{ request()->routeIs('admin.services.*') ? 'nav-item-expanded' : '' }} {{ request()->routeIs('admin.services.*') ? 'nav-item-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                        <i class="ph-handshake"></i>
                        <span>
                            Main Services
                        </span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->routeIs('admin.services.*') ? 'show' : '' }}">
                        <li class="nav-item">
                            <a href="{{ route("admin.services.facilitation.index") }}" class="nav-link {{ request()->routeIs('admin.services.facilitation.*') ? 'active' : '' }}">Facilitation</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.services.learning.index") }}" class="nav-link {{ request()->routeIs('admin.services.learning.*') ? 'active' : '' }}">Learning</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.project.index") }}" class="nav-link {{ request()->routeIs('admin.project.*') ? 'active' : '' }}">
                        <i class="ph-flag-banner"></i>
                        <span>
                            Projects
                        </span>
                    </a>
                </li>

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Blog</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.category.index") }}" class="nav-link {{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                        <i class="ph-newspaper-clipping"></i>
                        <span>
                            Blog Category
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.blog.index") }}" class="nav-link {{ request()->routeIs('admin.blog.index') ? 'active' : '' }}">
                        <i class="ph-newspaper-clipping"></i>
                        <span>
                            Blog Data
                        </span>
                    </a>
                </li>



                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Data Input</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.inbox.index") }}" class="nav-link {{ request()->routeIs('admin.inbox.*') ? 'active' : '' }}">
                        <i class="ph-envelope"></i>
                        <span>
                            Contact Inbox
                        </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
