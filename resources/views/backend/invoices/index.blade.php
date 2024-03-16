@extends('backend.master')

@section('title','Pages')

@push('css')

@endpush

@section('content')

    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Invoice 3</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Invoice Manager</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">View Invoices</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Filter</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a121418339e">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a121418339e" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                        </div>
                        <!--end::Filter menu-->
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!-- begin::Invoice 3-->
                    <div class="card">
                        <!-- begin::Body-->
                        <div class="card-body py-20">
                            <!-- begin::Wrapper-->
                            <div class="mw-lg-950px mx-auto w-100">
                                <!-- begin::Header-->
                                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                    <h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
                                    <!--end::Logo-->
                                    <div class="text-sm-end">
                                        <!--begin::Logo-->
                                        <a href="#" class="d-block mw-150px ms-sm-auto">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/lloyds-of-london-logo.svg" class="w-100" />
                                        </a>
                                        <!--end::Logo-->
                                        <!--begin::Text-->
                                        <div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
                                            <div>Cecilia Chapman, 711-2880 Nulla St, Mankato</div>
                                            <div>Mississippi 96522</div>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="pb-12">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column gap-7 gap-md-10">
                                        <!--begin::Message-->
                                        <div class="fw-bold fs-2">Dear Brian Cox
                                            <span class="fs-6">(brian@exchange.com)</span>,
                                            <br />
                                            <span class="text-muted fs-5">Here are your order details. We thank you for your purchase.</span></div>
                                        <!--begin::Message-->
                                        <!--begin::Separator-->
                                        <div class="separator"></div>
                                        <!--begin::Separator-->
                                        <!--begin::Order details-->
                                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Order ID</span>
                                                <span class="fs-5">#14534</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Date</span>
                                                <span class="fs-5">12 January, 2024</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Invoice ID</span>
                                                <span class="fs-5">#INV-000414</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Shipment ID</span>
                                                <span class="fs-5">#SHP-0025410</span>
                                            </div>
                                        </div>
                                        <!--end::Order details-->
                                        <!--begin::Billing & shipping-->
                                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Billing Address</span>
                                                <span class="fs-6">Unit 1/23 Hastings Road,
																<br />Melbourne 3000,
																<br />Victoria,
																<br />Australia.</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Shipping Address</span>
                                                <span class="fs-6">Unit 1/23 Hastings Road,
																<br />Melbourne 3000,
																<br />Victoria,
																<br />Australia.</span>
                                            </div>
                                        </div>
                                        <!--end::Billing & shipping-->
                                        <!--begin:Order summary-->
                                        <div class="d-flex justify-content-between flex-column">
                                            <!--begin::Table-->
                                            <div class="table-responsive border-bottom mb-9">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                    <thead>
                                                    <tr class="border-bottom fs-6 fw-bold text-muted">
                                                        <th class="min-w-175px pb-2">Products</th>
                                                        <th class="min-w-70px text-end pb-2">SKU</th>
                                                        <th class="min-w-80px text-end pb-2">QTY</th>
                                                        <th class="min-w-100px text-end pb-2">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Thumbnail-->
                                                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.png);"></span>
                                                                </a>
                                                                <!--end::Thumbnail-->
                                                                <!--begin::Title-->
                                                                <div class="ms-5">
                                                                    <div class="fw-bold">Product 1</div>
                                                                    <div class="fs-7 text-muted">Delivery Date: 12/01/2024</div>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                        </td>
                                                        <td class="text-end">01297007</td>
                                                        <td class="text-end">2</td>
                                                        <td class="text-end">$240.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Thumbnail-->
                                                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.png);"></span>
                                                                </a>
                                                                <!--end::Thumbnail-->
                                                                <!--begin::Title-->
                                                                <div class="ms-5">
                                                                    <div class="fw-bold">Footwear</div>
                                                                    <div class="fs-7 text-muted">Delivery Date: 12/01/2024</div>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                        </td>
                                                        <td class="text-end">03679008</td>
                                                        <td class="text-end">1</td>
                                                        <td class="text-end">$24.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-end">Subtotal</td>
                                                        <td class="text-end">$264.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-end">VAT (0%)</td>
                                                        <td class="text-end">$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-end">Shipping Rate</td>
                                                        <td class="text-end">$5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="fs-3 text-gray-900 fw-bold text-end">Grand Total</td>
                                                        <td class="text-gray-900 fs-3 fw-bolder text-end">$269.00</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end:Order summary-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Body-->
                                <!-- begin::Footer-->
                                <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                                    <!-- begin::Actions-->
                                    <div class="my-1 me-5">
                                        <!-- begin::Pint-->
                                        <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
                                        <!-- end::Pint-->
                                        <!-- begin::Download-->
                                        <button type="button" class="btn btn-light-success my-1">Download</button>
                                        <!-- end::Download-->
                                    </div>
                                    <!-- end::Actions-->
                                    <!-- begin::Action-->
                                    <a href="apps/invoices/create.html" class="btn btn-primary my-1">Create Invoice</a>
                                    <!-- end::Action-->
                                </div>
                                <!-- end::Footer-->
                            </div>
                            <!-- end::Wrapper-->
                        </div>
                        <!-- end::Body-->
                    </div>
                    <!-- end::Invoice 1-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end:::Main-->


@endsection

@push('js')

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{asset('backend')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('backend')}}/assets/js/widgets.bundle.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/widgets.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->

@endpush
