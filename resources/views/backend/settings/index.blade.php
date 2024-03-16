
@extends('backend.master')

@section('title','Pages')

@push('css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
          integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
          crossorigin="anonymous" />
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
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
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
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
                    <div class="card card-flush">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin:::Tabs-->
                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                                        <i class="ki-duotone ki-home fs-2 me-2"></i>General</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                                        <i class="ki-duotone ki-shop fs-2 me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>Site Logo</a>
                                </li>
                                <!--end:::Tab item-->

                            </ul>
                            <!--end:::Tabs-->
                            <!--begin:::Tab content-->
                            <div class="tab-content" id="myTabContent">
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                                    <!--begin::Form-->


                                    <form class="form-horizontal" id="submitFromDisable" action="{{ route('admin.settings.update',$setting) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                      <div class="row">

                                          <div class="col-sm-6">
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Site Name</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="site_name" value="{{ $setting->site_name }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">About Site</label>
                                                  <div class="col-sm-10">
                                                <textarea name="about_site" id="" class="form-control"  >{{ $setting->about_site }}
                                                </textarea>

                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Copy Right</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="copyright" value="{{ $setting->copyright }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Slogan</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="slogan" value="{{ $setting->slogan }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Meta Description</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="meta_description" value="{{ $setting->meta_description }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Meta Keywords</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="meta_keywords" value="{{ $setting->meta_keywords }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Facebook</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="facebook" value="{{ $setting->facebook }}" placeholder="https://">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Google</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="google" value="{{ $setting->google }}" placeholder="https://">
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="col-sm-6">

                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Google Plus</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="google_plus" value="{{ $setting->google_plus }}" placeholder="https://">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Twiter</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="twiter" value="{{ $setting->twiter }}" placeholder="https://">
                                                  </div>
                                              </div>

                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Instagram</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="instagram" value="{{ $setting->instagram }}" placeholder="https://">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Youtube</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="youtube" value="{{ $setting->youtube }}" placeholder="https://">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">contact</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="contact" value="{{ $setting->contact }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                                                  <div class="col-sm-10">
                                                      <input type="email" class="form-control" id="inputName2"
                                                             name="email" value="{{ $setting->email }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Web Mail</label>
                                                  <div class="col-sm-10">
                                                      <input type="email" class="form-control" id="inputName2"
                                                             name="webmail" value="{{ $setting->webmail }}">
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-2">
                                                  <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="inputName2"
                                                             name="address" value="{{ $setting->address }}">
                                                  </div>
                                              </div>

                                              <div class="form-group mt-2">
                                                  <div class="d-flex justify-content-end">
                                                      <button type="submit" id="submitBtnDisable" class="btn btn-primary">Submit</button>
                                                  </div>
                                              </div>

                                          </div>



                                      </div>


                                    </form>


                                    <!--end::Form-->
                                </div>
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                                    <!--begin::Form-->

                                    <form method="POST" id="submitFromDisable" action="{{ route('admin.logoupdate') }}"
                                          class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-sm-6 offset-3">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="custom-file w-100">
                                                                <input type="file" class="custom-file-input form-control" id="site_logo" name="site_logo" accept="image/*" onchange="document.getElementById('before').src = window.URL.createObjectURL(this.files[0])">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Image Preview -->
                                                    <div class="form-group my-2  text-center">
                                                        @if($setting->site_logo !== null)
                                                            <img src="{{asset('images/backend/'.$setting->site_logo)}}" alt="" style="max-width: 250px; max-height: 200px;" class="mx-auto d-block mb-2">
                                                        @endif
                                                            <img id="before" src="" alt="" style="max-width: 250px; max-height: 200px;" class="mx-auto d-block">
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" id="submitBtnDisable" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>





                                    <!--end::Form-->
                                </div>
                                <!--end:::Tab pane-->

                            </div>
                            <!--end:::Tab content-->
                        </div>
                        <!--end::Card body-->
                    </div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.dropify').dropify();

        });

    </script>
@endpush
