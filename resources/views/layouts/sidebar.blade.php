<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('home')}}" class="waves-effect">
                        <i class="mdi mdi-home-variant-outline"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-building-4-line"></i>
                        <span>My Company</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Bio Perusahaan</a></li>
                        <li><a href="email-read.html">Tenaga ahli</a></li>
                        <li><a href="email-read.html">Bidang Kerja</a></li>
                        <li><a href="email-read.html">Peralatan</a></li>
                        <li><a href="email-read.html">Project</a></li>
                        <li><a href="email-read.html">Gallery Project</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-database-2-line"></i>
                        <span>fitur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">karir</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-outline"></i>
                        <span>News</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('news.index') }}">News</a></li>
                        <li><a href="{{ route('kategori.index') }}">News Kategori</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-excavator"></i>
                        <span>Mining Product</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('Product.index') }}">Product</a></li>
                        <li><a href="{{ route('KategoriProduct.index') }}">Kategori Product</a></li>
                        <li><a href="#">Kategori Comudity</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-feature-search"></i>
                        <span>Carrier</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-page-layout-header"></i>
                        <span>Tender</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.html">Default</a></li>
                        <li><a href="layouts-hori-topbar-dark.html">Topbar Dark</a></li>
                        <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                    </ul>
                </li>

              

               

                <li class="menu-title">Management Web</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span>Manage Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('users.index') }}">Users</a></li>
                        <li><a href="{{route('roles.index') }}">Roles</a></li>
                        <li><a href="{{route('permission.index') }}">Permission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-earth"></i>
                        <span>Manage Web</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html">infomasi web</a></li>
                    </ul>
                </li>

             
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>