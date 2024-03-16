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
                    Blogs</h1>
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
                    <li class="breadcrumb-item text-muted">Blogs</li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

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
                                                   placeholder="Search Blog">
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Add customer-->
                                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add
                                            Blogs</a>
                                        <!--end::Add customer-->
                                    </div>
                                    <!--end::Card toolbar-->
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
                                                            <input class="form-check-input" id="multipleSelect"
                                                                   type="checkbox" data-kt-check="true"
                                                                   data-kt-check-target="#kt_ecommerce_category_table .form-check-input"
                                                                   value="1">
                                                        </div>
                                                    </th>
{{--                                                    <th class="min-w-30px sorting" tabindex="0"--}}
{{--                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"--}}
{{--                                                        colspan="1"--}}
{{--                                                        aria-label="Category: activate to sort column ascending"--}}
{{--                                                        style="width: 789.219px;">Sl--}}
{{--                                                    </th>--}}
                                                    <th>Sl</th>
                                                    <th class="min-w-80px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category Type: activate to sort column ascending"
                                                        style="width: 209.828px;">Image
                                                    </th>

                                                    <th class="min-w-100px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category Type: activate to sort column ascending"
                                                        style="width: 209.828px;">Tag
                                                    </th>
                                                    <th class="min-w-150px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category Type: activate to sort column ascending"
                                                        style="width: 209.828px;">Descriptions
                                                    </th>

                                                    <th class="min-w-100px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category Type: activate to sort column ascending"
                                                        style="width: 209.828px;">Created By
                                                    </th>
                                                    <th class="min-w-80px sorting" tabindex="0"
                                                        aria-controls="kt_ecommerce_category_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Category Type: activate to sort column ascending"
                                                        style="width: 209.828px;">Status
                                                    </th>
                                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1"
                                                        colspan="1" aria-label="Actions" style="width: 134.812px;">
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">


                                                @foreach($blogs as $key=>$category)

                                                    <tr class="odd">

                                                        <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input checkboxItem"
                                                                       type="checkbox" id="checkbox_{{$category->id}}"
                                                                       value="{{$category->id}}">
                                                            </div>
                                                        </td>

                                                        <td>{{ $key + 1 }}</td>

                                                        <td>
                                                            <div class="d-flex">
                                                                <!--begin::Thumbnail-->
                                                                <a href="{{ route('admin.blogs.edit',$category->id) }}"
                                                                   class="symbol symbol-50px">
                                                                    <span class="symbol-label"
                                                                          style="background-image:url({{ asset('images/backend') }}/{{ $category->image1 }});"></span>
                                                                </a>
                                                                <!--end::Thumbnail-->
                                                                <div class="ms-5">
                                                                    <!--begin::Title-->
                                                                    <a href="{{ route('admin.blogs.edit',$category->id) }}"
                                                                       class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                                                       data-kt-ecommerce-category-filter="category_name">{{$category->title}}</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7 fw-bold">{{Str::limit($category->short_desc,30)}}</div>
                                                                    <!--end::Description-->
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>{{$category->tag->name}}</td>

                                                        <td>{{Str::limit($category->long_desc,30)}}</td>
                                                        <td>{{$category->user->name}}</td>

                                                        <td>
                                                            <!--begin::Badges-->
                                                            @if($category->status == 1)
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
                                                                    <a href="{{ route('admin.blogs.edit',$category->id) }}"
                                                                       class="menu-link px-3">Edit</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a class="menu-link px-3 blogsDeleteBtn"
                                                                       data-kt-ecommerce-blogs="{{$category->id}}">Delete</a>
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
        // Brands Delete Of DataBase
        $(document).on('click', '.blogsDeleteBtn', function (e) {
            e.preventDefault()
            // alert('Ok')
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const blogsId = $(this).data('kt-ecommerce-blogs');

            Swal.fire({
                text: "Are you sure you want to delete this Blogs?",
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
                    const deleteUrl = "{{ route('admin.blogs.destroy', ['blog' => ':blogsId']) }}";
                    const url = deleteUrl.replace(':blogsId', blogsId);
                    $.ajax({
                        url: url,
                        method: "DELETE",
                        data: {
                            _token: csrfToken,
                        },
                        success: function (response) {
                            window.location.href= response.route;
                            toastr.success("Blogs Successfully Deleted!");
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
                            url: "blogs/destroy/multiple/{id}" + all_ids,
                            method: "POST",
                            data: {
                                ids: all_ids,
                                _token: csrfToken,
                            },
                            success: function (response) {
                                toastr.info("Blogs Successfully Deleted!");
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
