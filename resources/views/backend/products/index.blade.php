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
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Products</h1>
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
                            <li class="breadcrumb-item text-muted">eCommerce</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Catalog</li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Products</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
{{--                    <div class="d-flex align-items-center gap-2 gap-lg-3">--}}
{{--                        <!--begin::Filter menu-->--}}
{{--                        <div class="m-0">--}}
{{--                            <!--begin::Menu toggle-->--}}
{{--                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"--}}
{{--                               data-kt-menu-placement="bottom-end">--}}
{{--                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                </i>Filter</a>--}}
{{--                            <!--end::Menu toggle-->--}}
{{--                            <!--begin::Menu 1-->--}}
{{--                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"--}}
{{--                                 id="kt_menu_65a1214c6c869">--}}
{{--                                <!--begin::Header-->--}}
{{--                                <div class="px-7 py-5">--}}
{{--                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>--}}
{{--                                </div>--}}
{{--                                <!--end::Header-->--}}
{{--                                <!--begin::Menu separator-->--}}
{{--                                <div class="separator border-gray-200"></div>--}}
{{--                                <!--end::Menu separator-->--}}
{{--                                <!--begin::Form-->--}}
{{--                                <div class="px-7 py-5">--}}
{{--                                    <!--begin::Input group-->--}}
{{--                                    <div class="mb-10">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="form-label fw-semibold">Status:</label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <div>--}}
{{--                                            <select class="form-select form-select-solid" multiple="multiple"--}}
{{--                                                    data-kt-select2="true" data-close-on-select="false"--}}
{{--                                                    data-placeholder="Select option"--}}
{{--                                                    data-dropdown-parent="#kt_menu_65a1214c6c869"--}}
{{--                                                    data-allow-clear="true">--}}
{{--                                                <option></option>--}}
{{--                                                <option value="1">Approved</option>--}}
{{--                                                <option value="2">Pending</option>--}}
{{--                                                <option value="2">In Process</option>--}}
{{--                                                <option value="2">Rejected</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input group-->--}}
{{--                                    <!--begin::Input group-->--}}
{{--                                    <div class="mb-10">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="form-label fw-semibold">Member Type:</label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Options-->--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <!--begin::Options-->--}}
{{--                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="1"/>--}}
{{--                                                <span class="form-check-label">Author</span>--}}
{{--                                            </label>--}}
{{--                                            <!--end::Options-->--}}
{{--                                            <!--begin::Options-->--}}
{{--                                            <label class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="2"--}}
{{--                                                       checked="checked"/>--}}
{{--                                                <span class="form-check-label">Customer</span>--}}
{{--                                            </label>--}}
{{--                                            <!--end::Options-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Options-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input group-->--}}
{{--                                    <!--begin::Input group-->--}}
{{--                                    <div class="mb-10">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="form-label fw-semibold">Notifications:</label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Switch-->--}}
{{--                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                            <input class="form-check-input" type="checkbox" value=""--}}
{{--                                                   name="notifications" checked="checked"/>--}}
{{--                                            <label class="form-check-label">Enabled</label>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Switch-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input group-->--}}
{{--                                    <!--begin::Actions-->--}}
{{--                                    <div class="d-flex justify-content-end">--}}
{{--                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"--}}
{{--                                                data-kt-menu-dismiss="true">Reset--}}
{{--                                        </button>--}}
{{--                                        <button type="submit" class="btn btn-sm btn-primary"--}}
{{--                                                data-kt-menu-dismiss="true">Apply--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Actions-->--}}
{{--                                </div>--}}
{{--                                <!--end::Form-->--}}
{{--                            </div>--}}
{{--                            <!--end::Menu 1-->--}}
{{--                        </div>--}}
{{--                        <!--end::Filter menu-->--}}
{{--                        <!--begin::Secondary button-->--}}
{{--                        <!--end::Secondary button-->--}}
{{--                        <!--begin::Primary button-->--}}
{{--                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"--}}
{{--                           data-bs-target="#kt_modal_create_app">Create</a>--}}
{{--                        <!--end::Primary button-->--}}
{{--                    </div>--}}
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Products-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-ecommerce-product-filter="search"
                                           class="form-control form-control-solid w-250px ps-12"
                                           placeholder="Search Product"/>
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <div class="w-100 mw-150px">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Status"
                                            data-kt-ecommerce-product-filter="status">
                                        <option></option>
                                        <option value="all">All</option>
                                        <option value="1">Published</option>
                                        <option value="2">Draft</option>
                                        <option value="3">Inactive</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--begin::Add product-->
                                <a href="{{route('products.create')}}" class="btn btn-primary">Add Product</a>
                                <!--end::Add product-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                   id="kt_ecommerce_products_table">
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" id="multipleSelect" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-200px">Product</th>
                                    <th class="text-end min-w-100px">SKU</th>
                                    <th class="text-end min-w-70px">Qty</th>
                                    <th class="text-end min-w-100px">Price</th>
                                    {{--                                    <th class="text-end min-w-100px">Rating</th>--}}
                                    <th class="text-end min-w-100px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">

                                @foreach($products as $data)

                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input checkboxItem" type="checkbox" id="checkbox_{{$data->id}}" value="{{$data->id}}" >
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="apps/ecommerce/catalog/edit-product.html"
                                                   class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                          style="background-image:url({{asset('images/backend/'.$data->product_image)}});"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="apps/ecommerce/catalog/edit-product.html"
                                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                       data-kt-ecommerce-product-filter="product_name">{{$data->product_name}}</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">{{$data->sku}}</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="6">
                                            <span class="badge badge-light-warning">@if($data->stock <= 10) Low
                                                stock @endif</span>
                                            <span class="fw-bold text-warning ms-3">{{$data->stock}}</span>
                                        </td>
                                        <td class="text-end pe-0">{{$data->final_price}}</td>
                                        {{--                                    <td class="text-end pe-0" data-order="rating-4">--}}
                                        {{--                                        <div class="rating justify-content-end">--}}
                                        {{--                                            <div class="rating-label checked">--}}
                                        {{--                                                <i class="ki-duotone ki-star fs-6"></i>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="rating-label checked">--}}
                                        {{--                                                <i class="ki-duotone ki-star fs-6"></i>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="rating-label checked">--}}
                                        {{--                                                <i class="ki-duotone ki-star fs-6"></i>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="rating-label checked">--}}
                                        {{--                                                <i class="ki-duotone ki-star fs-6"></i>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="rating-label">--}}
                                        {{--                                                <i class="ki-duotone ki-star fs-6"></i>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </td>--}}
                                        <td class="text-end pe-0" data-order="Scheduled">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-primary">

                                                @if($data->status == 1)
                                                    Published
                                                @elseif($data->status == 2)
                                                    Draft
                                                @else
                                                    Inactive
                                                @endif

                                            </div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                 data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{route('products.edit',$data->id)}}"
                                                       class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3 itemDeleteBtn"
                                                       data-kt-ecommerce-delete="{{$data->id}}">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                @endforeach
                                <button type="button" name="multiple_select" id="multiple_select_delete"
                                        class="btn btn-sm btn-danger"
                                        data-url="">
                                    Delete
                                </button>

                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Products-->
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
                    <a href="https://keenthemes.com" target="_blank"
                       class="text-gray-800 text-hover-primary">Keenthemes</a>
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
    <script src="{{'backend'}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{'backend'}}/assets/js/custom/apps/ecommerce/catalog/products.js"></script>
    <script src="{{'backend'}}/assets/js/widgets.bundle.js"></script>
    <script src="{{'backend'}}/assets/js/custom/widgets.js"></script>
    <script src="{{'backend'}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{'backend'}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{'backend'}}/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{'backend'}}/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->

    <script>
        // Category Delete Of DataBase
        $(document).on('click', '.itemDeleteBtn', function (e) {
            e.preventDefault();

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const deleteId = $(this).data('kt-ecommerce-delete');
            const deleteUrl = "{{ route('products.destroy', ['product' => ':deleteId']) }}".replace(':deleteId', deleteId);

            Swal.fire({
                text: "Are you sure you want to delete this item?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                buttonsStyling: false,
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-light"
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: deleteUrl,
                        method: "DELETE",
                        data: {
                            _token: csrfToken,
                        },
                        success: function (response) {
                            window.location.reload();
                            toastr.success("Item successfully deleted!");
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>



    {{--        multiple Select Delete--}}
    <script>
        $(document).ready(function () {
            $('#multipleSelect').on('click', function () {
                $('.form-check-input').prop('checked', $(this).prop('checked'));
            });

            $('#multiple_select_delete').on('click', function (e) {
                e.preventDefault();
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                var all_ids = [];
                $('.checkboxItem:checked').each(function () {
                    all_ids.push($(this).val());
                });
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    // Check if the user clicked the "Yes, delete it!" button
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "products/destroy/multiple/" + all_ids,
                            method: "POST",
                            data: {
                                ids: all_ids,
                                _token: csrfToken,
                            },
                            success: function (response) {
                                toastr.info("Products Successfully Deleted!");
                                window.location.href = response.route;
                            },
                            error: function (xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>


@endpush
