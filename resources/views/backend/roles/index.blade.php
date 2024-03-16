@extends('backend.master')

@section('title','Roles')

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
          <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Tables</h1>
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
            <li class="breadcrumb-item text-muted">Widgets</li>
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
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1215942827">
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
                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1215942827" data-allow-clear="true">
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
      
       
        <!--end::Row-->
        <!--begin::Tables Widget 9-->
        <div class="card mb-5 mb-xl-8">
          <!--begin::Header-->
          <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
              <span class="card-label fw-bold fs-3 mb-1">Members Statistics</span>
              <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
              <a href="{{ route('admin.roles.create') }}" class="btn btn-primary er fs-6 px-8 py-4" >Add New Role</a>

            </div>
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
              <!--begin::Table-->
              <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                  <tr class="fw-bold text-muted">
                    
                    <th class="min-w-200px">Role</th>
                    <th class="min-w-150px">Permission</th>
                    <th class="min-w-150px">Progress</th>
                    <th class="min-w-100px text-end">Actions</th>
                  </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                  @foreach ($roles as $role)
                      
                 
                  <tr>
                  
                  
                    <td>
                     
                      <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $role->name }}</span>
                    </td>
                    <td>
                      {{-- <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block fs-6">{{ $role->name }}</a> --}}
                      <span class="text-muted fw-semibold text-muted d-block fs-7"></span>
                    </td>
                  
                    <td class="text-muted fw-semibold text-muted d-block fs-7">

                      @if ($role->permissions->count() > 0)
                      <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $role->permissions->count() }}</span>
{{--                                        <span class="badge badge-info">{{ $role->permissions->name }}</span>--}}
                      @else
                      <span class="text-muted fw-semibold text-muted d-block fs-7">No permission found :(</span>
                      @endif
                  </td>
                  
                  </tr>
                  @endforeach
                </tbody>
                <!--end::Table body-->
              </table>
              <!--end::Table-->
            </div>
            <!--end::Table container-->
          </div>
          <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->

       
      </div>
      <!--end::Content container-->
    </div>
    <!--end::Content-->
  </div>
 
</div>
<!--end:::Main-->



<!--end::Modal - New Card-->
@endsection
@push('js')

@endpush
