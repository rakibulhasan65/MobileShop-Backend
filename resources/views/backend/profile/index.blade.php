@extends('backend.master')

@section('title','Pages')

@push('css')


    <style>
        .upload-photo.ready #display {
            display: block;
        }

        .upload-photo.result #display-i {
            background: #e1e1e1;
            width: 300px;
            padding: 50px;
            height: 300px;
            margin-bottom: 30px
        }

        .upload-photo.ready .buttons #btn-upload-result,
        .upload-photo.ready .buttons #btn-upload-reset {
            display: inline;
        }

        .upload-photo #display,
        .upload-photo .buttons #btn-upload-result,
        .upload-photo .buttons #btn-upload-reset,
        .upload-photo.ready .upload-msg {
            display: none;
        }
    </style>

    <style>
        .profile-picture-container {
            text-align: center;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 50%;
            margin: 0 auto 20px;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .custom-file-input-label {
            display: inline-block;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #4285f4;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .custom-file-input-label:hover {
            background-color: #3367d6;
        }

        .custom-file-input {
            display: none;
        }
    </style>

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
                            User Profile</h1>
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
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->

                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->

                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">

                                    <!-- Profile Image -->
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                <!-- Profile picture display -->
                                               <div class="preview-image-before">
                                                   @if(Auth::user()->avatar !== null)
                                                       <div class="mb-3">
                                                           <img id="preview" class="profile-user-img img-fluid img-circle rounded-circle"
                                                                src="{{ asset('images/backend') }}/{{ Auth::user()->avatar }}"
                                                                alt="User profile picture">
                                                       </div>
                                                   @else
                                                       <div class="mb-3">
                                                           <img id="preview" class="profile-user-img img-fluid img-circle"
                                                                src="{{ asset('images/backend') }}/dummy1.png"
                                                                alt="User profile picture">
                                                       </div>
                                                   @endif
                                               </div>

                                                <img id="preview-image-before"
                                                     src=""
                                                     alt="preview image" style="max-height: 250px;"
                                                     class="form-floating rounded-circle mb-2">

                                            </div>

                                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                                            <p class="text-muted text-center">{{ Auth::user()->role->name }}</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- About Me Box -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">User Details</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <strong>Gmail</strong>
                                            <p class="text-muted">
                                                {{Auth::user()->email}}
                                            </p>
                                            <strong>Last Login</strong>
                                            <p class="text-muted">
                                                {{ \Carbon\Carbon::parse(Auth::user()->last_login_at)->format('jS M, Y H:s A') }}
                                            </p>

                                            <strong>Last Logout</strong>
                                            <p class="text-muted">
                                                {{ \Carbon\Carbon::parse(Auth::user()->last_logout_at)->format('jS M, Y H:s A') }}
                                            </p>

                                            {{--                                            <hr>--}}

                                            {{--                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>--}}

                                            {{--                                            <p class="text-muted">Malibu, California</p>--}}

                                            {{--                                            <hr>--}}

                                            {{--                                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>--}}

                                            {{--                                            <p class="text-muted">--}}
                                            {{--                                                <span class="tag tag-danger">UI Design</span>--}}
                                            {{--                                                <span class="tag tag-success">Coding</span>--}}
                                            {{--                                                <span class="tag tag-info">Javascript</span>--}}
                                            {{--                                                <span class="tag tag-warning">PHP</span>--}}
                                            {{--                                                <span class="tag tag-primary">Node.js</span>--}}
                                            {{--                                            </p>--}}

                                            {{--                                            <hr>--}}

                                            {{--                                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>--}}

                                            {{--                                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing--}}
                                            {{--                                                elit. Etiam--}}
                                            {{--                                                fermentum enim neque.</p>--}}
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-header p-2">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                       href="#kt_tab_pane_1">Change Profile Picture</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Change
                                                        Password</a>
                                                </li>


                                            </ul>
                                        </div><!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="active tab-pane" id="kt_tab_pane_1">

                                                    <form method="POST" action="{{ route('admin.profile.update') }}"
                                                          class="form-horizontal" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name" class="form-control mb-2" value="{{Auth::user()->name}}">
                                                                @error('name')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="avatar">Profile Image Upload</label>
                                                                <input type="file" name="avatar"
                                                                       class="form-control mb-2 mt-2"
                                                                       placeholder="Choose image"
                                                                       id="avatar"
                                                                       onchange="document.getElementById('preview-image-before').src = window.URL.createObjectURL(this.files[0])">
                                                                @error('avatar')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="facebook_id">Facebook Id</label>
                                                                <input type="text" id="facebook_id" name="facebook_id"
                                                                       class="form-control mb-2 mt-2"
                                                                       value="{{Auth::user()->facebook_id}}">
                                                                @error('facebook_id')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="google_id">Google Id</label>
                                                                <input type="text" id="google_id" name="google_id"
                                                                       class="form-control mb-2 mt-2"
                                                                       value="{{Auth::user()->google_id}}">
                                                                @error('google_id')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email">Email </label>
                                                                <input type="text" id="email" name="email "
                                                                       class="form-control mb-2 mt-2"
                                                                       value="{{Auth::user()->email }}">
                                                                @error('email')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Active Status</label>
                                                                <select name="active_status" id="active_status" class="form-control">
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary">Submit
                                                            </button>
                                                        </div>
                                                    </form>


                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="kt_tab_pane_2">

                                                    <form method="POST"
                                                          action="{{ route('admin.profile.password.update') }}"
                                                          class="form-horizontal">
                                                        @csrf
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Current
                                                                Password</label>
                                                            <div class="col-sm-10">
                                                                <input id="current_password" type="password"
                                                                       class="form-control mb-2 @error('current_password') is-invalid @enderror"
                                                                       name="current_password" required>

                                                                @error('current_password')
                                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">New
                                                                Password</label>
                                                            <div class="col-sm-10">
                                                                <input id="password" type="password"
                                                                       class="form-control mb-2 @error('password') is-invalid @enderror"
                                                                       name="password" required
                                                                       autocomplete="new-password">

                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Confirmed
                                                                Password</label>
                                                            <div class="col-sm-10">
                                                                <input id="password-confirm" type="password"
                                                                       class="form-control mb-2"
                                                                       name="password_confirmation" required
                                                                       autocomplete="new-password">
                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <button type="submit" class="btn btn-danger">Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.tab-pane -->
                                            </div>
                                            <!-- /.tab-content -->
                                        </div><!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- /.content -->

                    <!--end::Card-->
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

    <script>
        $(document).ready(function () {
            $('#preview-image-before').hide();
            $('#avatar').on('change', function () {
                $('#preview-image-before').show();
                $('.preview-image-before').hide();

            })
        })
    </script>

    <script>
        function previewImage() {
            const fileInput = document.getElementById('fileInput');
            const preview = document.getElementById('preview');

            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(file);
            }
        }
    </script>


@endpush
