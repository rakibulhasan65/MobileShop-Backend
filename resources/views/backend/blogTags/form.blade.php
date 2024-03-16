@extends('backend.master')
@push('css')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
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
                            Blog Tags</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Home</a>
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
                            <li class="breadcrumb-item text-muted">Blog Tags</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->

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


                        @if ($errors->any())
                            <!--begin::Alert-->
                                <div class="alert alert-primary d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <h4 class="mb-1 text-dark">This is an alert</h4>
                                        <!--end::Title-->
                                    @foreach ($errors->all() as $error)
                                        <!--begin::Content-->
                                            <span>{{ $error }}</span>
                                            <!--end::Content-->
                                        @endforeach
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Alert-->
                            @endif


                            <div class="container-fluid">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-12">
                                        <!-- general form elements -->
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __((isset($blogTag) ? 'Edit' : 'Create New') . ' Blog Tag') }}
                                                </h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <!-- form start -->

                                            <form role="form" id="submitFromDisable" method="POST"
                                                  action="{{ isset($blogTag) ? route('admin.blogtags.update',$blogTag->id) : route('admin.blogtags.store') }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                @if (isset($blogTag))
                                                    @method('PUT')
                                                @endif

                                                <div class="card shadow-sm">

                                                    <!-- /.card-header -->
                                                    <div class="card-body">


                                                        <div class="form-group my-3">
                                                            <label for="exampleInputEmail1">Tag Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                   value=" {{old('name', $blogTag->name ?? '' ) }}"
                                                                   field-attributes="required autofocus">
                                                            @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}} </strong>
                                            </span>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group my-3">
                                                            <label for="exampleInputEmail1">Status</label>
                                                            <div class="form-check my-3">
                                                                <input class="form-check-input" type="radio"
                                                                       name="status"
                                                                       value="1" @isset($blogTag)
                                                                    {{ $blogTag->status == 1 ? 'checked' : ''  }}@endisset>
                                                                <label class="form-check-label">Active</label>
                                                            </div>
                                                            <div class="form-check my-3">
                                                                <input class="form-check-input" type="radio"
                                                                       name="status"
                                                                       value="0" @isset($blogTag)
                                                                    {{ $blogTag->status == 0 ? 'checked' : ''  }}@endisset>
                                                                <label class="form-check-label">Deactive</label>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                        <div class="card-footer m-0 p-0 my-5 py-5">

                                                            <button type="submit" class="cursor btn btn-primary"
                                                                    id="submitBtnDisable">
                                                                @isset($blogTag)
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
                                        </div>
                                        <!-- /.card -->
                                        <!--/.col (right) -->
                                    </div>
                                    <!-- /.row -->
                                </div><!-- /.container-fluid -->
        </section>
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

    <!-- Summernote -->
    <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    <script>
        $(function () {
            // Summernote
            $('#summernote2').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
