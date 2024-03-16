@extends('backend.master')

@section('title','Pages')

@push('css')

@endpush

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack"
             data-select2-id="select2-data-kt_app_toolbar_container">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    Brands</h1>
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
                    <li class="breadcrumb-item text-muted">Brands</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
{{--            <div class="d-flex align-items-center gap-2 gap-lg-3" data-select2-id="select2-data-122-7boj">--}}
{{--                <!--begin::Filter menu-->--}}
{{--                <div class="m-0" data-select2-id="select2-data-121-w9v6">--}}
{{--                    <!--begin::Menu toggle-->--}}
{{--                    <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"--}}
{{--                       data-kt-menu-placement="bottom-end">--}}
{{--                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">--}}
{{--                            <span class="path1"></span>--}}
{{--                            <span class="path2"></span>--}}
{{--                        </i>Filter</a>--}}
{{--                    <!--end::Menu toggle-->--}}
{{--                    <!--begin::Menu 1-->--}}
{{--                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"--}}
{{--                         id="kt_menu_65a12153a553e" style="" data-select2-id="select2-data-kt_menu_65a12153a553e">--}}
{{--                        <!--begin::Header-->--}}
{{--                        <div class="px-7 py-5">--}}
{{--                            <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Header-->--}}
{{--                        <!--begin::Menu separator-->--}}
{{--                        <div class="separator border-gray-200"></div>--}}
{{--                        <!--end::Menu separator-->--}}
{{--                        <!--begin::Form-->--}}
{{--                        <div class="px-7 py-5" data-select2-id="select2-data-120-hfip">--}}
{{--                            <!--begin::Input group-->--}}
{{--                            <div class="mb-10" data-select2-id="select2-data-119-5z2y">--}}
{{--                                <!--begin::Label-->--}}
{{--                                <label class="form-label fw-semibold">Status:</label>--}}
{{--                                <!--end::Label-->--}}
{{--                                <!--begin::Input-->--}}
{{--                                <div data-select2-id="select2-data-118-p18m">--}}
{{--                                    <select class="form-select form-select-solid select2-hidden-accessible" multiple=""--}}
{{--                                            data-kt-select2="true" data-close-on-select="false"--}}
{{--                                            data-placeholder="Select option"--}}
{{--                                            data-dropdown-parent="#kt_menu_65a12153a553e" data-allow-clear="true"--}}
{{--                                            data-select2-id="select2-data-7-enl3" tabindex="-1" aria-hidden="true"--}}
{{--                                            data-kt-initialized="1">--}}
{{--                                        <option data-select2-id="select2-data-125-gu3v"></option>--}}
{{--                                        <option value="1" data-select2-id="select2-data-126-0dzf">Approved</option>--}}
{{--                                        <option value="2" data-select2-id="select2-data-127-wjop">Pending</option>--}}
{{--                                        <option value="2" data-select2-id="select2-data-128-yq16">In Process</option>--}}
{{--                                        <option value="2" data-select2-id="select2-data-129-bt6h">Rejected</option>--}}
{{--                                    </select><span--}}
{{--                                            class="select2 select2-container select2-container--bootstrap5 select2-container--below"--}}
{{--                                            dir="ltr" data-select2-id="select2-data-8-qiic" style="width: 100%;"><span--}}
{{--                                                class="selection"><span--}}
{{--                                                    class="select2-selection select2-selection--multiple form-select form-select-solid"--}}
{{--                                                    role="combobox" aria-haspopup="true" aria-expanded="false"--}}
{{--                                                    tabindex="-1" aria-disabled="false"><ul--}}
{{--                                                        class="select2-selection__rendered"--}}
{{--                                                        id="select2-y732-container"></ul><span--}}
{{--                                                        class="select2-search select2-search--inline"><textarea--}}
{{--                                                            class="select2-search__field" type="search" tabindex="0"--}}
{{--                                                            autocorrect="off" autocapitalize="none" spellcheck="false"--}}
{{--                                                            role="searchbox" aria-autocomplete="list" autocomplete="off"--}}
{{--                                                            aria-label="Search"--}}
{{--                                                            aria-describedby="select2-y732-container"--}}
{{--                                                            placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span--}}
{{--                                                class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                </div>--}}
{{--                                <!--end::Input-->--}}
{{--                            </div>--}}
{{--                            <!--end::Input group-->--}}
{{--                            <!--begin::Input group-->--}}
{{--                            <div class="mb-10">--}}
{{--                                <!--begin::Label-->--}}
{{--                                <label class="form-label fw-semibold">Member Type:</label>--}}
{{--                                <!--end::Label-->--}}
{{--                                <!--begin::Options-->--}}
{{--                                <div class="d-flex">--}}
{{--                                    <!--begin::Options-->--}}
{{--                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="1">--}}
{{--                                        <span class="form-check-label">Author</span>--}}
{{--                                    </label>--}}
{{--                                    <!--end::Options-->--}}
{{--                                    <!--begin::Options-->--}}
{{--                                    <label class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">--}}
{{--                                        <span class="form-check-label">Customer</span>--}}
{{--                                    </label>--}}
{{--                                    <!--end::Options-->--}}
{{--                                </div>--}}
{{--                                <!--end::Options-->--}}
{{--                            </div>--}}
{{--                            <!--end::Input group-->--}}
{{--                            <!--begin::Input group-->--}}
{{--                            <div class="mb-10">--}}
{{--                                <!--begin::Label-->--}}
{{--                                <label class="form-label fw-semibold">Notifications:</label>--}}
{{--                                <!--end::Label-->--}}
{{--                                <!--begin::Switch-->--}}
{{--                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" name="notifications"--}}
{{--                                           checked="checked">--}}
{{--                                    <label class="form-check-label">Enabled</label>--}}
{{--                                </div>--}}
{{--                                <!--end::Switch-->--}}
{{--                            </div>--}}
{{--                            <!--end::Input group-->--}}
{{--                            <!--begin::Actions-->--}}
{{--                            <div class="d-flex justify-content-end">--}}
{{--                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"--}}
{{--                                        data-kt-menu-dismiss="true">Reset--}}
{{--                                </button>--}}
{{--                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <!--end::Actions-->--}}
{{--                        </div>--}}
{{--                        <!--end::Form-->--}}
{{--                    </div>--}}
{{--                    <!--end::Menu 1-->--}}
{{--                </div>--}}
{{--                <!--end::Filter menu-->--}}
{{--                <!--begin::Secondary button-->--}}
{{--                <!--end::Secondary button-->--}}
{{--                <!--begin::Primary button-->--}}
{{--                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"--}}
{{--                   data-bs-target="#kt_modal_create_app">Create</a>--}}
{{--                <!--end::Primary button-->--}}
{{--            </div>--}}
            <!--end::Actions-->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">


                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Category-->
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
                                            <input type="text" data-kt-ecommerce-category-filter="search"
                                                   class="form-control form-control-solid w-250px ps-12"
                                                   placeholder="Search Category">
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Add customer-->
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#colorCreateModal">Add Color
                                        </button>
                                        <!--end::Add customer-->
                                    </div>
                                    <!--end::Card toolbar-->


                                    {{-- colorCreateModal --}}
                                    <div class="modal fade" id="colorCreateModal" tabindex="-1" role="dialog"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleLargeModalLabel">Add New
                                                        Color</h5>
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                         data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="ki-duotone ki-cross fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <form class="needs-validation" novalidate
                                                      action="{{ route('colors.store') }}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-row">
                                                            <div class="col-md-12 mb-3">
                                                                <label for="color_name">Color Name</label>
                                                                <input type="text" class="form-control" id="color_name"
                                                                       placeholder="Enter Color Name" name="color_name"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12 mb-3">
                                                                <label for="color_code">Color Code</label>
                                                                <input id="color_code" type="text" class="form-control"
                                                                       placeholder="Enter Color Code (#FFFFFF)"
                                                                       name="color_code" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12 mb-3">
                                                                <label for="color_pick">Pick Color</label>
                                                                <input type="color" class="form-control" id="color_pick"
                                                                       style="height: 60px;"
                                                                       placeholder="Enter Color Code" name="code"
                                                                       required>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="col-md-12 mb-3">
                                                                <label for="status">Status</label>
                                                                <select name="status" id=""
                                                                        class="form-select form-select-solid"
                                                                        data-control="select2"
                                                                        data-placeholder="Select an option"
                                                                        data-hide-search="true">
                                                                    <option value="1">Published</option>
                                                                    <option value="2">unpublished</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Save changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <div id="kt_ecommerce_category_table_wrapper"
                                         class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                                   id="kt_ecommerce_category_table">
                                                <thead>
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="
														" style="width: 29.8906px;">
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                            <input class="form-check-input" id="multipleSelect" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1">
                                                        </div>
                                                    </th>
                                                    <th class="min-w-250px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category: activate to sort column ascending"
                                                        style="width: 789.219px;">Color Name
                                                    </th>
                                                    <th class="min-w-150px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category Type: activate to sort column ascending"
                                                        style="width: 209.828px;">Color View
                                                    </th>
                                                    <th class="min-w-150px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category Type: activate to sort column ascending"
                                                        style="width: 209.828px;">Color Code
                                                    </th>
                                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1"
                                                        colspan="1" aria-label="Actions" style="width: 134.812px;">
                                                        Status
                                                    </th>
                                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1"
                                                        colspan="1" aria-label="Actions" style="width: 134.812px;">
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">


                                                @foreach($colors as $key =>$data)

                                                    <tr class="odd">
                                                        <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input checkboxItem" type="checkbox" id="checkbox_{{$data->id}}" value="{{$data->id}}" >
                                                            </div>
                                                        </td>


                                                        <td>
                                                            {{$data->color_name}}
                                                        </td>
                                                        <td class="text-center">
                                                            <div style="display: flex; justify-content: center; align-items: center;
                                                                    border: 1px solid #dadada; border-radius: 50%; background-color: {{ $data->color_code }};
                                                                    width: 24px; height: 24px;">
                                                                <!-- Content inside the div -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{$data->color_code}}
                                                        </td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            @if($data->status == 1)
                                                                <div class="badge badge-light-success">Published</div>
                                                            @else
                                                                <div class="badge badge-light-danger">Unpublished</div>
                                                        @endif
                                                        <!--end::Badges-->
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                               class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center"
                                                               data-kt-menu-trigger="click"
                                                               data-kt-menu-placement="bottom-end">Actions
                                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                 data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"
                                                                       data-bs-toggle="modal"
                                                                       data-bs-target="#colorUpdateModal{{$data->id}}">Edit</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a class="menu-link px-3 colorDeleteBtn"
                                                                       data-kt-ecommerce-color="{{$data->id}}">Delete</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                    </tr>


                                                    {{-- colorUpdateModal --}}
                                                    <div class="modal fade" id="colorUpdateModal{{$data->id}}"
                                                         tabindex="-1" role="dialog"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleLargeModalLabel">
                                                                        Add New
                                                                        Color</h5>
                                                                    <!--begin::Close-->
                                                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                         data-bs-dismiss="modal" aria-label="Close">
                                                                        <i class="ki-duotone ki-cross fs-1"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <form class="needs-validation" novalidate
                                                                      action="{{ route('colors.update', $data->id) }}" method="POST"
                                                                      enctype="multipart/form-data">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-row">
                                                                            <div class="col-md-12 mb-3">
                                                                                <label for="color_name">Color
                                                                                    Name</label>
                                                                                <input type="text" class="form-control"
                                                                                       id="color_name-{{ $key + 1 }}"
                                                                                       placeholder="Enter Color Name"
                                                                                       name="color_name"
                                                                                       required
                                                                                       value="{{$data->color_name}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12 mb-3">
                                                                                <label for="color_code">Color
                                                                                    Code</label>
                                                                                <input id="color_code-{{ $key + 1 }}"
                                                                                       type="text" class="form-control"
                                                                                       placeholder="Enter Color Code (#FFFFFF)"
                                                                                       name="color_code" required
                                                                                       value="{{$data->color_code}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mb-3">
                                                                            <label for="color_pick-{{ $key + 1 }}">Pick
                                                                                Color</label>
                                                                            <input type="color" class="form-control"
                                                                                   id="color_pick-{{ $key + 1 }}"
                                                                                   placeholder="Enter Color Code"
                                                                                   name="code" required
                                                                                   style="height: 60px;"
                                                                                   value="{{ $data->code }}">
                                                                        </div>

                                                                        <div class="form-row">
                                                                            <div class="col-md-12 mb-3">
                                                                                <label for="status">Status</label>
                                                                                <select name="status" id="status"
                                                                                        class="form-select form-select-solid"
                                                                                        data-control="select2"
                                                                                        data-placeholder="Select an option"
                                                                                        data-hide-search="true">
                                                                                    <option value="1"
                                                                                            @if($data->status == 1) selected @endif>
                                                                                        Published
                                                                                    </option>
                                                                                    <option value="2"
                                                                                            @if($data->status == 2) selected @endif>
                                                                                        Unpublished
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light"
                                                                                data-bs-dismiss="modal">Close
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Save changes
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>



                                                @endforeach

                                                <button type="button" name="multiple_select" id="multiple_select_delete"
                                                        class="btn btn-sm btn-danger"
                                                        data-url="">
                                                    Delete
                                                </button>

                                                </tbody>
                                                <!--end::Table body-->
                                            </table>

                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Category-->
                                </div>
                                <!--end::Content container-->
                            </div>


                        </div>
                    </div>
        </section>


    </div>


@endsection

@push('js')

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('backend')}}/assets/js/custom/apps/ecommerce/catalog/categories.js"></script>
    <script src="{{asset('backend')}}/assets/js/widgets.bundle.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/widgets.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->

    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('.categoryDeleteBtn').on('click',function () {--}}
    {{--         --}}
    {{--            })--}}
    {{--        })--}}
    {{--    </script>--}}


    <script>
        // get color code from type text
        $('input[type="text"]').on('keyup', function () {
            //get id
            var id = $(this).attr('id');
            if (id.search('color_code') != -1) {
                var color = $(this).val();
                var target = '#color_pick'
                if (id.search('-') != -1) {
                    var id = id.split('-');
                    id = id[1];
                    target = '#color_pick-' + id;
                }
                $(target).val(color);
            }
        });

        // get color code from type color
        document.querySelectorAll('input[type="color"]').forEach(function (picker) {
            picker.addEventListener('input', function () {
                var id = $(this).attr('id');
                if (id.search('color_pick') != -1) {
                    var color = $(this).val();
                    var target = '#color_code'
                    if (id.search('-') != -1) {
                        var id = id.split('-');
                        id = id[1];
                        target = '#color_code-' + id;
                    }
                    $(target).val(color);
                }
            }, false);
        });
    </script>
    <script>
        $(document).on('click', '.colorDeleteBtn', function (e) {
            e.preventDefault();

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const deleteId = $(this).data('kt-ecommerce-color');

            Swal.fire({
                text: "Are you sure you want to delete this color?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel",
                buttonsStyling: false,
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-light"
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const url = "{{ route('colors.destroy', ':deleteId') }}";
                    const deleteUrl = url.replace(':deleteId', deleteId);

                    $.ajax({
                        url: deleteUrl,
                        method: "DELETE",
                        data: {
                            _token: csrfToken,
                        },
                        success: function (response) {
                            window.location.reload();
                            toastr.success("Color Successfully Deleted!");
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>




    <script>
        // Category Delete Of DataBase
        $(document).on('click', '.categoryDeleteBtn', function (e) {
            e.preventDefault()
            // alert('Ok')
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const categoryId = $(this).data('kt-ecommerce-category-filter');

            Swal.fire({
                text: "Are you sure you want to delete this category?",
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
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    const deleteUrl = "{{ route('categories.destroy', ['category' => ':categoryId']) }}";
                    const url = deleteUrl.replace(':categoryId', categoryId);
                    $.ajax({
                        url: url,
                        method: "DELETE",
                        data: {
                            _token: csrfToken,
                        },
                        success: function (response) {
                            window.location.reload();
                            toastr.success("Category Successfully Deleted!");
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
                            url: "colors/destroy/multiple/" + all_ids,
                            method: "POST",
                            data: {
                                ids: all_ids,
                                _token: csrfToken,
                            },
                            success: function (response) {
                                toastr.info("Colors Successfully Deleted!");
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
