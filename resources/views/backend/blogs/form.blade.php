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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __((isset($blog) ? 'Edit' : 'Create New') . ' blog') }}</h1>
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
            <!--begin::Actions-->
        {{--            <div class="d-flex align-items-center gap-2 gap-lg-3" data-select2-id="select2-data-122-7boj">--}}
        {{--                <!--begin::Filter menu-->--}}
        {{--                <div class="m-0" data-select2-id="select2-data-121-w9v6">--}}
        {{--                    <!--begin::Menu toggle-->--}}
        {{--                    <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
        {{--                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">--}}
        {{--                            <span class="path1"></span>--}}
        {{--                            <span class="path2"></span>--}}
        {{--                        </i>Filter</a>--}}
        {{--                    <!--end::Menu toggle-->--}}
        {{--                    <!--begin::Menu 1-->--}}
        {{--                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a12153a553e" style="" data-select2-id="select2-data-kt_menu_65a12153a553e">--}}
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
        {{--                                    <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a12153a553e" data-allow-clear="true" data-select2-id="select2-data-7-enl3" tabindex="-1" aria-hidden="true" data-kt-initialized="1">--}}
        {{--                                        <option data-select2-id="select2-data-125-gu3v"></option>--}}
        {{--                                        <option value="1" data-select2-id="select2-data-126-0dzf">Approved</option>--}}
        {{--                                        <option value="2" data-select2-id="select2-data-127-wjop">Pending</option>--}}
        {{--                                        <option value="2" data-select2-id="select2-data-128-yq16">In Process</option>--}}
        {{--                                        <option value="2" data-select2-id="select2-data-129-bt6h">Rejected</option>--}}
        {{--                                    </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-8-qiic" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-y732-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-y732-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
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
        {{--                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">--}}
        {{--                                    <label class="form-check-label">Enabled</label>--}}
        {{--                                </div>--}}
        {{--                                <!--end::Switch-->--}}
        {{--                            </div>--}}
        {{--                            <!--end::Input group-->--}}
        {{--                            <!--begin::Actions-->--}}
        {{--                            <div class="d-flex justify-content-end">--}}
        {{--                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>--}}
        {{--                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>--}}
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
        {{--                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>--}}
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

                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Add customer-->
                                        <a href="{{route('admin.blogs.index')}}" class="btn btn-primary">Blogs List</a>
                                        <!--end::Add customer-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <section class="content">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                    @endif
                                    <!-- /.card-header -->
                                        <!-- form start -->
                                        <!-- form start -->

                                        <form role="form" id="submitFromDisable" method="POST"
                                              action="{{ isset($blog) ? route('admin.blogs.update',$blog->id) : route('admin.blogs.store') }}"
                                              enctype="multipart/form-data">
                                        @csrf
                                        @if (isset($blog))
                                            @method('PUT')
                                        @endif



                                        <!-- /.card-header -->


                                                <div class="form-group mb-2">
                                                    <label class="fs-6 fw-semibold form-label"
                                                           for="blog_tag_id">Blog Tag</label>
                                                    <select name="blog_tag_id" id="blog_tag_id"
                                                            class="form-control select2">
                                                        <option value="">Select Category</option>
                                                        @foreach ($blogtags as $cat)
                                                            <option value="{{ $cat->id }}" {{ old('blog_tag_id', $cat->id) == $cat->id ? 'selected' : '' }} @isset($blog)
                                                                {{ $blog->blog_tag_id == $cat->id ? 'selected' : ''  }}@endisset >{{ $cat->name }}</option>
                                                        @endforeach

                                                    </select>
                                                    @error('blog_tag_id')
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}} </strong>
                                        </span>
                                                    @enderror
                                                </div>


                                                <div class="form-group mb-2">
                                                    <label class="fs-6 fw-semibold form-label">Title</label>
                                                    <input type="text" class="form-control" name="title"
                                                           value=" {{old('title', $blog->title ?? '' ) }}"
                                                           field-attributes="required autofocus">
                                                    @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}} </strong>
                                            </span>
                                                    @enderror
                                                </div>


                                                <!-- /.row -->


                                                <div class="form-group mb-2">
                                                    <label class="fs-6 fw-semibold form-label">Short
                                                        Description</label>

                                                    <textarea name="short_desc"
                                                              placeholder="something goes here"
                                                              class="form-control">{{old('short_desc') }}@isset($blog){{ $blog->short_desc  }} @endisset</textarea>

                                                    @error('short_desc')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="fs-6 fw-semibold form-label">Long
                                                        Description</label>

                                                    <textarea id="summernote" class="form-control"
                                                              name="long_desc"
                                                              placeholder="something goes here">{{old('long_desc') }}@isset($blog){{ $blog->long_desc  }} @endisset
                                        </textarea>

                                                    @error('long_desc')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                                    @enderror
                                                </div>
                                                {{-- <div>
                                                    <!--begin::Label-->
                                                    <label class="form-label">Long Description</label>
                                                    <!--end::Label-->
                                                    <!--begin::Editor-->
                                                    <div class="ql-toolbar ql-snow">
                                                        <span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button></span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline> <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button></span></div><div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2 ql-container ql-snow"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here..."><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>
                                                            <input type="text" name="long_desc" value="{{old('long_desc', $blog->long_desc ?? '' ) }}" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                                                    <!--end::Editor-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                                    <!--end::Description-->
                                                </div> --}}


                                                <div class="form-group mb-2">

                                                    <label for="exampleInputEmail1"
                                                           class="fs-6 fw-semibold form-label">Feature Image
                                                        <span class="text-danger">*</span></label>
                                                    <input type="file" name="image1" class="form-control"
                                                           placeholder="Choose image"
                                                           id="image"
                                                           onchange="document.getElementById('preview-image-before').src = window.URL.createObjectURL(this.files[0])">
                                                    @error('image1')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                    <img id="preview-image-before"
                                                         src=""
                                                         alt="preview image" style="max-height: 50%;"
                                                         class="form-floating mt-2">

                                                    @isset($blog)
                                                        <img id="preview-image-before-edit"
                                                             src="{{ asset('images/backend') }}/{{ $blog->image1 }}"
                                                             alt="preview image" style="max-height: 50%;"
                                                             class="form-floating mt-2">
                                                    @endisset

                                                </div>

                                                {{-- <div class="form-group">

                                                    <label for="exampleInputEmail1"> Image 2</label>



                                                    <input type="file" name="image2" placeholder="Choose image"
                                                           id="image">
                                                    @error('image')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                    <img id="preview-image-before-upload"
                                                         src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                         alt="preview image" style="max-height: 250px;">

                                                    @isset($blog)

                                                    <img id="preview-image-before-upload"
                                                         src="{{ asset('images/backend') }}/{{ $blog->image2 }}"
                                                         alt="preview image" style="max-height: 250px;">
                                                    @endisset

                                                </div>

                                                <div class="form-group">

                                                    <label for="exampleInputEmail1">Image3</label>
                                                    <input type="file" name="image3" placeholder="Choose image"
                                                           id="image">
                                                    @error('image')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                    <img id="preview-image-before-upload"
                                                         src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                         alt="preview image" style="max-height: 250px;">

                                                    @isset($blog)

                                                    <img id="preview-image-before-upload"
                                                         src="{{ asset('images/backend') }}/{{ $blog->image3 }}"
                                                         alt="preview image" style="max-height: 250px;">
                                                    @endisset

                                                </div>

                                                <div class="form-group">

                                                    <label for="exampleInputEmail1">Image4</label>
                                                    <input type="file" name="image4" placeholder="Choose image"
                                                           id="image">
                                                    @error('image')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                    <img id="preview-image-before-upload"
                                                         src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                         alt="preview image" style="max-height: 250px;">

                                                    @isset($blog)

                                                    <img id="preview-image-before-upload"
                                                         src="{{ asset('images/backend') }}/{{ $blog->image4 }}"
                                                         alt="preview image" style="max-height: 250px;">
                                                    @endisset

                                                </div> --}}

                                                <div class="form-group mb-2">
                                                    <label for="exampleInputEmail1"
                                                           class="fs-6 fw-semibold form-label">Status</label>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio"
                                                               name="status"
                                                               value="1" @isset($blog)
                                                            {{ $blog->status == 1 ? 'checked' : ''  }}@endisset>
                                                        <label class="form-check-label">Active</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio"
                                                               name="status"
                                                               value="0" @isset($blog)
                                                            {{ $blog->status == 0 ? 'checked' : ''  }}@endisset>
                                                        <label class="form-check-label">Deactive</label>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="d-flex justify-content-start mt-2">
                                                    <button type="submit" class="cursor btn btn-primary"
                                                            id="submitBtnDisable">
                                                        @isset($blog)
                                                            <i class="fas fa-arrow-circle-up"></i>
                                                            update
                                                        @else
                                                            <i class="fas fa-plus-circle"></i>
                                                            create
                                                        @endisset
                                                    </button>

                                                </div>

                                            </div>

                                        </form>

                                        <!-- /.card -->
                                        <!--/.col (right) -->

                                    </section>


                                </div>
                                <!--end::Content container-->
                            </div>


                        </div>
                    </div>
        </section>


    </div>


@endsection

@push('js')


    <script>
        $(document).ready(function () {
            $('#preview-image-before').hide();
            $('#image').on('change', function () {
                $('#preview-image-before').show();
                $('#preview-image-before-edit').hide();

            })
        })
    </script>

@endpush






























