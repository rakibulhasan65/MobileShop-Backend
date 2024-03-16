<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>Dashboard</title>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        "/>
    <meta name="keywords"
          content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes"/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Metronic by Keenthemes"/>
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8/demo1/dashboards/ecommerce.html"/>
    <link rel="shortcut icon" href="/metronic8/demo1/assets/media/logos/favicon.ico"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!--End::Google Tag Manager (noscript) -->


<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


        <!--begin::Header-->
        <div id="kt_app_header" class="app-header " data-kt-sticky="true"
             data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
             data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">

            <!--begin::Header container-->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
                 id="kt_app_header_container">

                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                         id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                    </div>
                </div>
                <!--end::Sidebar mobile toggle-->


                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="{{(request()->is(['admin/users*','dashboard']))}}" class="d-lg-none">
                        <img alt="Logo" src="{{asset('backend')}}/metronic8/demo1/assets/media/logos/default-small.svg"
                             class="h-30px"/>
                    </a>
                </div>
                <!--end::Mobile logo-->

                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                     id="kt_app_header_wrapper">

                    <!--begin::Menu wrapper-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                         data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                         data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                         data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                         data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                        <!--begin::Menu-->
                        <div class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        "
                             id="kt_app_header_menu" data-kt-menu="true">
                            <!--begin:Menu item-->

                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link--><span class="menu-link"><span
                                            class="menu-title">Apps</span><span
                                            class="menu-arrow d-lg-none"></span></span><!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">

                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start"
                                         class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span
                                                class="menu-link"><span class="menu-icon"><i
                                                        class="ki-duotone ki-handcart fs-2"></i></span><span
                                                    class="menu-title">eCommerce</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="right-start"
                                                 class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Catalog</span><span
                                                            class="menu-arrow"></span></span><!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="{{route('products.index')}}"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Products</span></a>
                                                        <!--end:Menu link-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="{{route('categories.index')}}"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Categories</span></a>
                                                        <!--end:Menu link-->
                                                    </div><!--end:Menu item-->

                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="{{route('brands.index')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                            <span class="menu-title">Brands</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>

                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="{{route('products.create')}}"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Add
                                                                    Product</span></a><!--end:Menu link--></div>
                                                    {{--                                                    <!--end:Menu item--><!--begin:Menu item-->--}}
                                                    {{--                                                    <div class="menu-item"><!--begin:Menu link--><a--}}
                                                    {{--                                                                class="menu-link"--}}
                                                    {{--                                                                href="/metronic8/demo1/apps/ecommerce/catalog/edit-product.html"><span--}}
                                                    {{--                                                                    class="menu-bullet"><span--}}
                                                    {{--                                                                        class="bullet bullet-dot"></span></span><span--}}
                                                    {{--                                                                    class="menu-title">Edit--}}
                                                    {{--                                                                    Product</span></a><!--end:Menu link--></div>--}}
                                                    {{--                                                    <!--end:Menu item--><!--begin:Menu item-->--}}
                                                    <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="{{route('categories.create')}}"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Add
                                                                    Category</span></a><!--end:Menu link--></div>


                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="{{route('brands.create')}}"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Add
                                                                    Brands</span></a><!--end:Menu link--></div>
                                                    <!--end:Menu item-->

                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a
                                                                class="menu-link"
                                                                href="{{route('colors.create')}}"><span
                                                                    class="menu-bullet"><span
                                                                        class="bullet bullet-dot"></span></span><span
                                                                    class="menu-title">Add Colors</span></a>
                                                        <!--end:Menu link--></div>
                                                    <!--end:Menu item-->


                                                    {{--                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->--}}
                                                    {{--                                                    <div class="menu-item"><!--begin:Menu link--><a--}}
                                                    {{--                                                                class="menu-link"--}}
                                                    {{--                                                                href="/metronic8/demo1/apps/ecommerce/catalog/edit-category.html"><span--}}
                                                    {{--                                                                    class="menu-bullet"><span--}}
                                                    {{--                                                                        class="bullet bullet-dot"></span></span><span--}}
                                                    {{--                                                                    class="menu-title">Edit--}}
                                                    {{--                                                                    Category</span></a><!--end:Menu link--></div>--}}
                                                    {{--                                                    <!--end:Menu item-->--}}
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->

                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->


                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->


                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->


                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::Search-->

                        <!--end::Search-->

                        <!--begin::Notifications-->
                        <!--end::Notifications-->


                        <!--begin::Chat-->
                        <div class="app-navbar-item ms-1 ms-md-4">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative"
                                 id="kt_drawer_chat_toggle">
                                <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                <span
                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
                                    </span>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Chat-->

                        <!--begin::My apps links-->

                        <!--end::My apps links-->


                        <!--begin::Theme mode-->
                        <div class="app-navbar-item ms-1 ms-md-4">

                            <!--begin::Menu toggle-->
                            <a href="#"
                               class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                               data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                               data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-night-day theme-light-show fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span class="path10"></span></i> <i
                                        class="ki-duotone ki-moon theme-dark-show fs-1"><span
                                            class="path1"></span><span class="path2"></span></i></a>
                            <!--begin::Menu toggle-->

                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                 data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span><span class="path6"></span><span
                                                            class="path7"></span><span class="path8"></span><span
                                                            class="path9"></span><span class="path10"></span></i>
                                            </span>
                                        <span class="menu-title">
                                                Light
                                            </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>
                                        <span class="menu-title">
                                                Dark
                                            </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span></i>
                                            </span>
                                        <span class="menu-title">
                                                System
                                            </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->

                        </div>
                        <!--end::Theme mode-->


                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-35px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="rounded-3"
                                     alt="user"/>
                            </div>

                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                 data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo"
                                                 src="/metronic8/demo1/assets/media/avatars/300-3.jpg"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                {{ Auth::user()->name }} <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>

                                            <a href="#"
                                               class="fw-semibold text-muted text-hover-primary fs-7">
                                                {{ Auth::user()->email }} </a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/metronic8/demo1/account/overview.html" class="menu-link px-5">
                                        My Profile
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/metronic8/demo1/apps/projects/list.html" class="menu-link px-5">
                                        <span class="menu-text">My Projects</span>
                                        <span class="menu-badge">
                                                <span
                                                        class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                            </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">My Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/referrals.html"
                                               class="menu-link px-5">
                                                Referrals
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/billing.html"
                                               class="menu-link px-5">
                                                Billing
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/statements.html"
                                               class="menu-link px-5">
                                                Payments
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/statements.html"
                                               class="menu-link d-flex flex-stack px-5">
                                                Statements

                                                <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                      title="View your statements">
                                                        <i class="ki-duotone ki-information-5 fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span class="path3"></span></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                           value="1" checked="checked" name="notifications"/>
                                                    <span class="form-check-label text-muted fs-7">
                                                            Notifications
                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/metronic8/demo1/account/statements.html" class="menu-link px-5">
                                        My Statements
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Mode

                                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                    <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span><span class="path6"></span><span
                                                                class="path7"></span><span class="path8"></span><span
                                                                class="path9"></span><span class="path10"></span></i>
                                                    <i class="ki-duotone ki-moon theme-dark-show fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </span>
                                    </a>

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                         data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                               data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-duotone ki-night-day fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span
                                                                    class="path5"></span><span
                                                                    class="path6"></span><span
                                                                    class="path7"></span><span
                                                                    class="path8"></span><span
                                                                    class="path9"></span><span
                                                                    class="path10"></span></i>
                                                    </span>
                                                <span class="menu-title">
                                                        Light
                                                    </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                               data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-duotone ki-moon fs-2"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                <span class="menu-title">
                                                        Dark
                                                    </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                               data-kt-value="system">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-duotone ki-screen fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span></i>
                                                    </span>
                                                <span class="menu-title">
                                                        System
                                                    </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Language

                                                <span
                                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                    English <img class="w-15px h-15px rounded-1 ms-2"
                                                                 src="/metronic8/demo1/assets/media/flags/united-states.svg"
                                                                 alt=""/>
                                                </span>
                                            </span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/settings.html"
                                               class="menu-link d-flex px-5 active">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                             src="/metronic8/demo1/assets/media/flags/united-states.svg"
                                                             alt=""/>
                                                    </span>
                                                English
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/settings.html"
                                               class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                             src="/metronic8/demo1/assets/media/flags/spain.svg"
                                                             alt=""/>
                                                    </span>
                                                Spanish
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/settings.html"
                                               class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                             src="/metronic8/demo1/assets/media/flags/germany.svg"
                                                             alt=""/>
                                                    </span>
                                                German
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/settings.html"
                                               class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                             src="/metronic8/demo1/assets/media/flags/japan.svg"
                                                             alt=""/>
                                                    </span>
                                                Japanese
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/metronic8/demo1/account/settings.html"
                                               class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                             src="/metronic8/demo1/assets/media/flags/france.svg"
                                                             alt=""/>
                                                    </span>
                                                French
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="/metronic8/demo1/account/settings.html" class="menu-link px-5">
                                        Account Settings
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="{{ route('logout') }}"
                                       class="menu-link px-5" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Sign Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->

                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->

                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                                 id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                            </div>
                        </div>
                        <!--end::Header menu toggle-->

                        <!--begin::Aside toggle-->
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">


            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
                 data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                 data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="/metronic8/demo1/index.html">
                        <img alt="Logo" src="{{asset('backend')}}/metronic8/demo1/assets/media/logos/default-dark.svg"
                             class="h-25px app-sidebar-logo-default"/>

                        <img alt="Logo" src="{{asset('backend')}}/metronic8/demo1/assets/media/logos/default-small.svg"
                             class="h-20px app-sidebar-logo-minimize"/>
                    </a>
                    <!--end::Logo image-->

                    <!--begin::Sidebar toggle-->
                    <!--begin::Minimized sidebar setup:
        if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
            1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
            2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
            3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
            4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
        }
    -->
                    <div id="kt_app_sidebar_toggle"
                         class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
                         data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                         data-kt-toggle-name="app-sidebar-minimize">

                        <i class="ki-duotone ki-black-left-line fs-3 rotate-180"><span class="path1"></span><span
                                    class="path2"></span></i>
                    </div>
                    <!--end::Sidebar toggle-->
                </div>
                <!--end::Logo-->

            {{-- menubar --}}
            <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                        <!--begin::Scroll wrapper-->
                        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                             data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                             data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                             data-kt-scroll-save-state="true">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                                 id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                                <!--begin:Menu item-->
                                <a href="{{route('admin.dashboard')}}">
                                    <div class="menu-item here show menu-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                        class="ki-duotone ki-element-11 fs-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span
                                                            class="path4"></span></i></span><span
                                                    class="menu-title">Dashboards</span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                    </div><!--end:Menu item-->
                                </a>


                                <!--begin:Menu item-->

                                <div class="menu-item pt-5"><!--begin:Menu content-->
                                    <div class="menu-content"><span
                                                class="menu-heading fw-bold text-uppercase fs-7">Apps</span></div>
                                    <!--end:Menu content-->
                                </div><!--end:Menu item--><!--begin:Menu item-->


                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-basket fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">eCommerce</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Catalog</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('products.index')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Products</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('categories.index')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Categories</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('brands.index')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Brands</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('products.create')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Product</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                            {{--                                                    <div class="menu-item">--}}
                                            {{--                                                        <!--begin:Menu link-->--}}
                                            {{--                                                        <a class="menu-link" href="apps/ecommerce/catalog/edit-product.html">--}}
                                            {{--																<span class="menu-bullet">--}}
                                            {{--																	<span class="bullet bullet-dot"></span>--}}
                                            {{--																</span>--}}
                                            {{--                                                            <span class="menu-title">Edit Product</span>--}}
                                            {{--                                                        </a>--}}
                                            {{--                                                        <!--end:Menu link-->--}}
                                            {{--                                                    </div>--}}
                                            <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('categories.create')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Category</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('brands.create')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Brands</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->


                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('colors.index')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Color</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->


                                                <!--begin:Menu item-->
                                            {{--                                                    <div class="menu-item">--}}
                                            {{--                                                        <!--begin:Menu link-->--}}
                                            {{--                                                        <a class="menu-link" href="apps/ecommerce/catalog/edit-category.html">--}}
                                            {{--																<span class="menu-bullet">--}}
                                            {{--																	<span class="bullet bullet-dot"></span>--}}
                                            {{--																</span>--}}
                                            {{--                                                            <span class="menu-title">Edit Category</span>--}}
                                            {{--                                                        </a>--}}
                                            {{--                                                        <!--end:Menu link-->--}}
                                            {{--                                                    </div>--}}
                                            <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sales</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="apps/ecommerce/sales/listing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Orders Listing</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="apps/ecommerce/sales/details.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Order Details</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="apps/ecommerce/sales/add-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Order</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Edit Order</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customers</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('customers.index')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Customer Listing</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('customers.show','1')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Customer Details</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reports</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('reports.view')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Products Viewed</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('reports.sales')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sales</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('reports.returns')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Returns</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                       href="{{route('reports.customer-orders')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Customer Orders</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{route('reports.shipping')}}">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Shipping</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{route('admin.settings.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->


                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click"
                                     class="menu-item menu-accordion {{ (request()->is(['admin/users*','admin/roles*'])) ? 'here hover show' : '' }} ">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-abstract-28 fs-2"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i></span><span class="menu-title">User
                                                Management</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion {{ (request()->is(['admin/users*',])) ? 'show' : '' }}">
                                                <!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link-->
                                                    <a class="menu-link {{ (request()->is(['admin/users',])) ? 'active' : '' }}"
                                                       href="{{ route('admin.users.index') }}"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Users
                                                                List</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                href="/metronic8/demo1/apps/user-management/users/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View
                                                                User</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Roles</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion {{ (request()->is(['admin/users*',])) ? 'show' : '' }}">
                                                <!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a
                                                            class="menu-link {{ (request()->is(['admin/roles*',])) ? 'active' : '' }}"
                                                            href="{{ route('admin.roles.index') }}"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Roles
                                                                List</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                href="/metronic8/demo1/apps/user-management/roles/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View
                                                                Role</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                        href="{{route('admin.permissions.index')}}"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Permissions</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item-->


                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-abstract-38 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">Customers</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{route('customers.getting.started')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{route('customers.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Customer Listing</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{route('customers.show','1')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Customer Details</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-map fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">

                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{route('subscription.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">View Subscription</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->


                                <!--begin:Menu item-->
                            {{--                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
                            {{--                                    <!--begin:Menu link-->--}}
                            {{--                                    <span class="menu-link">--}}
                            {{--												<span class="menu-icon">--}}
                            {{--													<i class="ki-duotone ki-sms fs-2">--}}
                            {{--														<span class="path1"></span>--}}
                            {{--														<span class="path2"></span>--}}
                            {{--													</i>--}}
                            {{--												</span>--}}
                            {{--												<span class="menu-title">Inbox</span>--}}
                            {{--												<span class="menu-arrow"></span>--}}
                            {{--											</span>--}}
                            {{--                                    <!--end:Menu link-->--}}
                            {{--                                    <!--begin:Menu sub-->--}}
                            {{--                                    <div class="menu-sub menu-sub-accordion">--}}
                            {{--                                        <!--begin:Menu item-->--}}
                            {{--                                        <div class="menu-item">--}}
                            {{--                                            <!--begin:Menu link-->--}}
                            {{--                                            <a class="menu-link" href="apps/inbox/listing.html">--}}
                            {{--														<span class="menu-bullet">--}}
                            {{--															<span class="bullet bullet-dot"></span>--}}
                            {{--														</span>--}}
                            {{--                                                <span class="menu-title">Messages</span>--}}
                            {{--                                                <span class="menu-badge">--}}
                            {{--															<span class="badge badge-success">3</span>--}}
                            {{--														</span>--}}
                            {{--                                            </a>--}}
                            {{--                                            <!--end:Menu link-->--}}
                            {{--                                        </div>--}}
                            {{--                                        <!--end:Menu item-->--}}
                            {{--                                        <!--begin:Menu item-->--}}
                            {{--                                        <div class="menu-item">--}}
                            {{--                                            <!--begin:Menu link-->--}}
                            {{--                                            <a class="menu-link" href="apps/inbox/compose.html">--}}
                            {{--														<span class="menu-bullet">--}}
                            {{--															<span class="bullet bullet-dot"></span>--}}
                            {{--														</span>--}}
                            {{--                                                <span class="menu-title">Compose</span>--}}
                            {{--                                            </a>--}}
                            {{--                                            <!--end:Menu link-->--}}
                            {{--                                        </div>--}}
                            {{--                                        <!--end:Menu item-->--}}
                            {{--                                        <!--begin:Menu item-->--}}
                            {{--                                        <div class="menu-item">--}}
                            {{--                                            <!--begin:Menu link-->--}}
                            {{--                                            <a class="menu-link" href="apps/inbox/reply.html">--}}
                            {{--														<span class="menu-bullet">--}}
                            {{--															<span class="bullet bullet-dot"></span>--}}
                            {{--														</span>--}}
                            {{--                                                <span class="menu-title">View & Reply</span>--}}
                            {{--                                            </a>--}}
                            {{--                                            <!--end:Menu link-->--}}
                            {{--                                        </div>--}}
                            {{--                                        <!--end:Menu item-->--}}
                            {{--                                    </div>--}}
                            {{--                                    <!--end:Menu sub-->--}}
                            {{--                                </div>--}}
                            <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-credit-cart fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">Invoice Manager</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">


                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{route('invoices.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Invoice</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->


                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{route('invoices.create')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Create Invoice</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->

                                <div data-kt-menu-trigger="click"
                                     class="menu-item here menu-accordion ">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-blog">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                     <span class="path3"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Blog</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion
                                         kt-hidden-height="125">
                                    <div class="menu-item">
                                        <!--begin:Menu item-->
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                               href="{{ route('admin.blogs.index') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                <span class="menu-title">Blog</span>
                                            </a>

                                        <a class="menu-link"
                                           href="{{ route('admin.blogtags.index') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                            <span class="menu-title">Blog Tags</span>
                                        </a>


                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->


                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>





                                <div data-kt-menu-trigger="click"
                                     class="menu-item here menu-accordion {{ (request()->is(['admin/chat*'])) ? 'here hover show' : '' }}">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-message-text-2 fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Chat</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion {{ (request()->is(['admin/chat*',])) ? 'show' : '' }}"
                                         kt-hidden-height="125">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link {{ (request()->is(['admin/chat*',])) ? 'active' : '' }}"
                                               href="{{ route('admin.chat') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                <span class="menu-title">Chat</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->


                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>




                            <div data-kt-menu-trigger="click"
                                 class="menu-item here menu-accordion ">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-user">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                     <span class="path3"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Profile</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion
                                         kt-hidden-height="125">
                                <div class="menu-item">
                                    <!--begin:Menu item-->
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                       href="{{ route('admin.profile.index') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                        <span class="menu-title">Profile</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->


                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>


                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Scroll wrapper-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::sidebar menu-->
                <!--begin::Footer-->

                <!--end::Footer-->
            </div>
            <!--end::Sidebar-->


            <!--begin::Main-->
        @yield('content')


        <!--end:::Main-->


        </div>
        <!--end::Wrapper-->


    </div>
    <!--end::Page-->
</div>
<!--end::App-->


<!--begin::App settings toggle-->

<!--end::App settings toggle-->
<!--begin::Drawers-->


<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
                        Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i></button>

                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                         data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                Contacts
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_users_search">
                                Add Contact
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_invite_friends">
                                Invite Contacts

                                <span class="ms-2" data-bs-toggle="tooltip"
                                      title="Specify a contact email to send an invitation">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i> </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                             data-kt-menu-placement="right-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                       title="Coming soon">
                                        Create Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                       title="Coming soon">
                                        Invite Members
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                       title="Coming soon">
                                        Settings
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                               title="Coming soon">
                                Settings
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                                class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                 data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                 data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">


                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                    Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            How likely are you to recommend our company to your friends and family ?
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#"
                                   class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            Hey there, we’re just writing to let you know that you’ve been subscribed to a
                            repository on GitHub.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                    Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Ok, Understood!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#"
                                   class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            You’ll receive notifications for all issues, pull requests!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                    Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            You can unwatch this repository immediately by clicking here: <a
                                    href="https://dreamlabit.com/">dreamlabit.com</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#"
                                   class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            Most purchased Business courses during this sale!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#"
                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                            provided
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#"
                                   class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for out)-->

                <!--begin::Message(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="/metronic8/demo1/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#"
                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Right before vacation season we have the next Big Deal for you.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                      placeholder="Type a message">

            </textarea>
            <!--end::Input-->

            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-paper-clip fs-3"></i></button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span
                                    class="path2"></span></i></button>
                </div>
                <!--end::Actions-->

                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->

<!--begin::Chat drawer-->

<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Engage-->

<!--end::Engage-->

<!--begin::Engage modals-->
<!--begin::Modal - Sitemap-->

<!--end::Modal - Sitemap--> <!--end::Engage modals-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
</div>
<!--end::Scrolltop-->

<!--begin::Modals-->

<!--begin::Modal - Upgrade plan-->

<!--end::Modal - Upgrade plan-->


<!--begin::Javascript-->
<script>
    var hostUrl = "/backend/assets/";
</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->


<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
<!--end::Vendors Javascript-->

{{--    <!--begin::Custom Javascript(used for this page only)-->--}}
{{--    <script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>--}}
{{--    <script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>--}}
{{--    <script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>--}}
{{--    --}}{{-- <script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>--}}
{{--    <script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script> --}}
{{--    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>--}}
{{--    <!--end::Custom Javascript-->--}}


{{--toastr Setup --}}
<script src="{{asset('js')}}/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.success("{{ session('message') }}");
    @endif

            @if(Session::has('error'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.error("{{ session('error') }}");
    @endif

            @if(Session::has('info'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.info("{{ session('info') }}");
    @endif

            @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.warning("{{ session('warning') }}");
    @endif

</script>

@stack('js')
</body>
<!--end::Body-->

</html>
