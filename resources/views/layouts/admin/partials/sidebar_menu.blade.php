<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <!-- END SIDEBAR TOGGLER BUTTON -->
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="nav-item start active open">
                    <a href="{{ url('admin') }}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Features</h3>
                </li>
                <li class="nav-item  @yield('users_menu')">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond " ></i>
                        <span class="title">Users</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        {{--<li class="nav-item @yield('add_user') ">--}}
                            {{--<a href="{{ url('/CreateUsers') }}" class="nav-link ">--}}
                                {{--<span class="title">Create User</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li class="nav-item @yield('list_users') ">
                            <a href="{{ url('/Users') }}" class="nav-link ">
                                <span class="title">List Users</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item  @yield('item_info')">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond " ></i>
                        <span class="title">Item Info.</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item @yield('add_Item') ">
                            <a href="{{ url('/Item/create') }}" class="nav-link ">
                                <span class="title">Add Item</span>
                            </a>
                        </li>
                        <li class="nav-item @yield('list_Item') ">
                            <a href="{{ url('/Item') }}" class="nav-link ">
                                <span class="title">List Item</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item  @yield('brand_info')">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond " ></i>
                        <span class="title">Brand Info.</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item @yield('add_brand') ">
                            <a href="{{ url('/Brand/create') }}" class="nav-link ">
                                <span class="title">Add Brand</span>
                            </a>
                        </li>
                        <li class="nav-item @yield('list_brand') ">
                            <a href="{{ url('/Brand') }}" class="nav-link ">
                                <span class="title">List Brand</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item  @yield('cate_info')">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond " ></i>
                        <span class="title">Category Info.</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item @yield('add_cate') ">
                            <a href="{{ url('/Category/create') }}" class="nav-link ">
                                <span class="title">Add Category</span>
                            </a>
                        </li>
                        <li class="nav-item @yield('list_cate') ">
                            <a href="{{ url('/Category') }}" class="nav-link ">
                                <span class="title">List Category</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item  @yield('p_info')">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond" ></i>
                        <span class="title">Product Info.</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item @yield('add_pro') ">
                            <a href="{{ url('/CreateProduct') }}" class="nav-link ">
                                <span class="title">Add Product</span>
                            </a>
                        </li>
                        <li class="nav-item @yield('List_pro') ">
                            <a href="{{ url('/Product') }}" class="nav-link ">
                                <span class="title">View Product</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item  @yield('slider')">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond " ></i>
                        <span class="title">Slider</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item @yield('add_Slider') ">
                            <a href="{{ url('/Slider/create') }}" class="nav-link ">
                                <span class="title">Add Slider</span>
                            </a>
                        </li>
                        <li class="nav-item @yield('list_Slider') ">
                            <a href="{{ url('/Slider') }}" class="nav-link ">
                                <span class="title">List Slider</span>
                            </a>
                        </li>
                    </ul>
                </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>