@extends('backend.master')

@section('title','Pages')

@push('css')

@endpush

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack"
                     data-select2-id="select2-data-kt_app_toolbar_container">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Categories</h1>
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
                            <li class="breadcrumb-item text-muted">Categories Edit</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3" data-select2-id="select2-data-122-7boj">
                        <!--begin::Filter menu-->
                        <div class="m-0" data-select2-id="select2-data-121-w9v6">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"
                               data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Filter</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                 id="kt_menu_65a12153a553e" style=""
                                 data-select2-id="select2-data-kt_menu_65a12153a553e">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5" data-select2-id="select2-data-120-hfip">
                                    <!--begin::Input group-->
                                    <div class="mb-10" data-select2-id="select2-data-119-5z2y">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div data-select2-id="select2-data-118-p18m">
                                            <select class="form-select form-select-solid select2-hidden-accessible"
                                                    multiple="" data-kt-select2="true" data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_65a12153a553e"
                                                    data-allow-clear="true" data-select2-id="select2-data-7-enl3"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                <option data-select2-id="select2-data-125-gu3v"></option>
                                                <option value="1" data-select2-id="select2-data-126-0dzf">Approved
                                                </option>
                                                <option value="2" data-select2-id="select2-data-127-wjop">Pending
                                                </option>
                                                <option value="2" data-select2-id="select2-data-128-yq16">In Process
                                                </option>
                                                <option value="2" data-select2-id="select2-data-129-bt6h">Rejected
                                                </option>
                                            </select><span
                                                    class="select2 select2-container select2-container--bootstrap5 select2-container--below"
                                                    dir="ltr" data-select2-id="select2-data-8-qiic"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="-1" aria-disabled="false"><ul
                                                                class="select2-selection__rendered"
                                                                id="select2-y732-container"></ul><span
                                                                class="select2-search select2-search--inline"><textarea
                                                                    class="select2-search__field" type="search" tabindex="0"
                                                                    autocorrect="off" autocapitalize="none"
                                                                    spellcheck="false" role="searchbox"
                                                                    aria-autocomplete="list" autocomplete="off"
                                                                    aria-label="Search"
                                                                    aria-describedby="select2-y732-container"
                                                                    placeholder="Select option"
                                                                    style="width: 100%;"></textarea></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                            <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1">
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                       checked="checked">
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
                                        <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="notifications" checked="checked">
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply
                                        </button>
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
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                           data-bs-target="#kt_modal_create_app">Create</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">


                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                                  data-kt-redirect="" method="POST" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
                            @csrf
                                @method('PUT')
                            <!--begin::Aside column-->
                                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                    <!--begin::Thumbnail settings-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Thumbnail</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            @if($category->category_image)
                                                <!--begin::Image input placeholder-->
                                                    <style>.image-input-placeholder {
                                                            background-image: url('{{asset(Storage::url('uploads/category/'.$category->category_image))}}');
                                                        }

                                                        [data-bs-theme="dark"] .image-input-placeholder {
                                                            background-image: url('{{asset('backend')}}/assets/media/svg/files/blank-image-dark.svg');
                                                        }</style>
                                                    <!--end::Image input placeholder-->
                                            @else
                                                <!--begin::Image input placeholder-->
                                                    <style>.image-input-placeholder {
                                                            background-image: url('{{asset('backend')}}/assets/media/svg/files/blank-image.svg');
                                                        }

                                                        [data-bs-theme="dark"] .image-input-placeholder {
                                                            background-image: url('{{asset('backend')}}/assets/media/svg/files/blank-image-dark.svg');
                                                        }</style>
                                                    <!--end::Image input placeholder-->
                                            @endif

                                            <!--begin::Image input-->
                                            <div
                                                    class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                    data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change avatar">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-pencil fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="category_image" accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="avatar_remove"/>
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        title="Cancel avatar">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        title="Remove avatar">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the category thumbnail image. Only *.png,
                                                *.jpg and *.jpeg image files are accepted
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Thumbnail settings-->
                                    <!--begin::Status-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Status</h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <div class="rounded-circle bg-success w-15px h-15px"
                                                     id="kt_ecommerce_add_category_status"></div>
                                            </div>
                                            <!--begin::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select an option"
                                                    id="kt_ecommerce_add_category_status_select" name="status">
                                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>
                                                    Published
                                                </option>
                                                <option value="2" {{ $category->status == 2 ? 'selected' : '' }}>
                                                    Unpublished
                                                </option>
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the category status.</div>
                                            <!--end::Description-->
                                            <!--begin::Datepicker-->
                                            <div class="d-none mt-10">
                                                <label for="kt_ecommerce_add_category_status_datepicker"
                                                       class="form-label">Select publishing date and time</label>
                                                <input class="form-control"
                                                       id="kt_ecommerce_add_category_status_datepicker"
                                                       placeholder="Pick date & time"/>
                                            </div>
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Status-->

                                </div>
                                <!--end::Aside column-->
                                <!--begin::Main column-->
                                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>General</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Category Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="category_name" class="form-control mb-2"
                                                       placeholder="Product name" value="{{$category->category_name}}"/>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">A category name is required and recommended
                                                    to be unique.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div>
                                                <!--begin::Label-->
                                                <label class="form-label">Short Description</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <textarea class="form-control" name="shortDescription"  data-kt-autosize="true" placeholder="Short Description">{{$category->shortDescription}}</textarea>
                                                <!--end::Editor-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a description to the category for
                                                    better visibility.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->

                                            <div class="">
                                                <!--begin::Input group-->
                                                <label for="basic-url" class="required fw-semibold fs-6 mb-2">Your URL</label>
                                                <div class="input-group mb-5">
                                                    <span class="input-group-text" id="basic-addon3">example.com</span>
                                                    <input type="text" class="form-control" id="basic-url" name="url" value="{{$category->url}}" aria-describedby="basic-addon3"/>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::General options-->


                                    <!--begin::Pricing-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Discount</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                <!--begin::Label-->
                                                <label class="form-label">Fixed Discounted Price</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="category_discount" class="form-control mb-2" placeholder="Discounted price" value="{{$category->category_discount}}">
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <!--end::Pricing-->

                                    </div>

                                    <!--begin::Meta options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Meta Options</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label">Meta Tag Title</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control mb-2" name="meta_title"
                                                       placeholder="Meta tag name" value="{{$category->meta_title}}"/>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a meta tag title. Recommended to be
                                                    simple and precise keywords.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label">Meta Tag Description</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <div id="kt_ecommerce_add_category_meta_description"
                                                     name="meta_descriptions"
                                                     class="min-h-100px mb-2"></div>
                                                <!--end::Editor-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a meta tag description to the category
                                                    for increased SEO ranking.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div>
                                                <!--begin::Label-->
                                                <label class="form-label">Meta Tag Keywords</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <input id="kt_ecommerce_add_category_meta_keywords"
                                                       name="meta_title"
                                                       class="form-control mb-2" value="{{$category->meta_title}}"/>
                                                <!--end::Editor-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a list of keywords that the category is
                                                    related to. Separate the keywords by adding a comma
                                                    <code>,</code>between each keyword.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Meta options-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <a href="apps/ecommerce/catalog/products.html"
                                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" id="kt_ecommerce_add_category_submit"
                                                class="btn btn-primary">
                                            <span class="indicator-label">Save Changes</span>
                                            <span class="indicator-progress">Please wait...
													<span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <!--end::Main column-->
                            </form>
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->


                </div>
            </div>
        </section>


    </div>


@endsection

@push('js')

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('backend')}}/assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
    <script src="{{asset('backend')}}/assets/js/widgets.bundle.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/widgets.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{asset('backend')}}/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->

{{--    <script>--}}
{{--        var quill = new Quill('#kt_ecommerce_add_category_description', {--}}
{{--            modules: {--}}
{{--                toolbar: [--}}
{{--                    [{--}}
{{--                        header: [1, 2, false]--}}
{{--                    }],--}}
{{--                    ['bold', 'italic', 'underline'],--}}
{{--                    ['image', 'code-block']--}}
{{--                ]--}}
{{--            },--}}
{{--            placeholder: 'Type your text here...',--}}
{{--            theme: 'snow' // or 'bubble'--}}
{{--        });--}}
{{--    </script>--}}

    <script>
        var quill = new Quill('#kt_ecommerce_add_category_meta_description', {
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            theme: 'snow' // or 'bubble'
        });

        // Set placeholder text after Quill initialization
        var placeholderText = '{{$category->meta_descriptions}}';
        quill.root.dataset.placeholder = placeholderText;
    </script>



@endpush
