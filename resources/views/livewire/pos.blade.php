<div class="app-main flex-column flex-row-fluid" id="kt_app_main" data-select2-id="select2-data-kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid" data-select2-id="select2-data-131-ezi1">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add Order</h1>
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
                        <li class="breadcrumb-item text-muted">Sales</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
              
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
        <div id="kt_app_content" class="app-content flex-column-fluid" data-select2-id="select2-data-kt_app_content">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl" data-select2-id="select2-data-kt_app_content_container">
                <!--begin::Form-->
                {{-- <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="apps/ecommerce/sales/listing.html" data-select2-id="select2-data-kt_ecommerce_edit_order_form"> --}}
                    <!--begin::Aside column-->
                    {{-- <form wire:submit="checkOut"> --}}
                    <form action="{{ route('admin.inhouse.pos.store') }}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-8" style="height: 400px;">
                            <div>
                                <input type="search" placeholder="search product" wire:model.live="search"> 

                            </div>
                            <div class="row">
                                @foreach ($products as $product)
                                    
                               
                                <div class="col-md-3">
                                    <div class="card" wire:click="addCart({{ $product->id }})">
                                        <img src="{{ asset('images/backend') }}/{{ $product->product_image }}" class="card-img-top" height="70" width="50">
                                        <div class="card-body">
                                          <h5 class="card-title"><b>{{ $product->product_name }}</b></h5>
                                          @if($product->product_price > $product->final_price )
                                          <p class="card-text"> <del>{{ $product->product_price }}</del> </p>
                                            @endif
                                          <p class="card-text">{{ $product->final_price }}</p>
                                         
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                             
                             
                            </div>
                          
                        </div>
                        <div class="col-4">
                                <table class="table">
                                    @if (session()->has('error'))
                                    <div class="alert alert-success">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                    <thead>
                                        <th>
                                           Product Name
                                        </th>
                                        <th>
                                          Quantity
                                        </th>
                                        <th>Sub Total</th>
                                    </thead>

                                    <tbody>
                                        @foreach (Cart::content() as $row)
                                        <tr>
                                            <td>{{ $row->name }}</td>
                                            <td>

                                                    <i class="ki-duotone ki-plus-square" wire:click="qtyPlus('{{ $row->rowId }}')">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    </i>

                                              {{ $row->qty}}
                                              <i class="ki-duotone ki-minus-square" wire:click="qtyMinus('{{ $row->rowId }}')">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                            </td>
                                            <td>{{ $row->price * $row->qty }}</td>

                                            <td>

                                                <a href="#" wire:click.prevent="removeCartItem('{{$row->rowId}}')">
                                                    <i class="ki-duotone ki-trash">
                         <span class="path1"></span>
                         <span class="path2"></span>
                         <span class="path3"></span>
                         <span class="path4"></span>
                         <span class="path5"></span>
                        </i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>



                                </table>

                                <table class="table">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td  style="text-align:right">
                                            Sub Total
                                        </td>
                                        <td>
                                            ({{Cart::content()->count(); }})
                                        </td>

                                        <td>
                                            <input type="text"  readonly class="form-control" value="{{ Cart::total() }}">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td  style="text-align:right">

                                           <button wire:click="create" type="button" class="btn btn-primary btn-sm" >
                                           Apply Voucher
                                          </button>
                                        </td>
                                        <td>

                                        </td>

                                        <td>
                                           <input type="text"  class="form-control" name="couponAmount" wire:model="" value="{{ $couponAmount ?? 0 }}" >
                                           <input type="hidden"  class="form-control" name="couponCode" wire:model="coupon_code_code" value="{{ $couponCode ?? '' }}" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td  style="text-align:right">
                                           Total
                                        </td>
                                        <td>

                                        </td>


                                        <td>
                                           <input type="text" name="total" value="{{ number_format((str_replace(',', '', Cart::total()) - $couponAmount),2)}}" class="form-control">
                                           {{-- <input type="text" name="total" value="" class="form-control"> --}}
                                        </td>
                                    </tr>






                                </table>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Billing Address </label>

                                  </div>
                                <div class="mb-3">
                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="John M. Doe" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="email"><i class="fa fa-envelope"></i> Phone</label>
                                        <input type="text" class="form-control" name="mobile" placeholder="john@example.com" required>

                                  </div>
                                  <div class="mb-3">
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="john@example.com" required>

                                  </div>
                                  <div class="mb-3">
                                    <label for="email"><i class="fa fa-envelope"></i>Country</label>
                                        <input type="text" class="form-control" name="country" placeholder="Dhaka" required>

                                  </div>
                                  <div class="mb-3">
                                    <label for="email"><i class="fa fa-envelope"></i>State</label>
                                        <input type="text" class="form-control" name="state" placeholder="Dhaka" required>

                                  </div>
                                  <div class="mb-3">
                                    <label for="email"><i class="fa fa-envelope"></i> City</label>
                                        <input type="text" class="form-control" name="city" placeholder="Gazipur" required>

                                  </div>

                                  <div class="mb-3">
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="542 W. 15th Street" required>

                                  </div>
                                  <div class="mb-3">
                                    <label for="email"><i class="fa fa-envelope"></i> Zip Ccode</label>
                                        <input type="text" class="form-control" name="zip_code" placeholder="Gazipur">

                                  </div>

                                  <div class="mb-3">
                                    <label>
                                        <input type="checkbox" checked="checked" name="sameadr" value=""> Shipping address same as billing
                                      </label>



                                  </div>
                                  <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>



                                  </div>





                        </div>

                       
                
                    </div>
                    
               
                    
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    {{-- <div id="kt_app_footer" class="app-footer">
        <!--begin::Footer container-->
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-gray-900 order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2024©</span>
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
    </div> --}}
    <!--end::Footer-->


    <!-- Modal -->
    @if ($isOpen)
{{-- <div class="modal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit="checkCoupon"> 
        <div class="modal-body">
         <input type="text" wire:model="coupon_code" name="coupon_code" class="form-control @error('coupon_code') is-invalid @enderror">
         @error('coupon_code')
             <span class="text-danger">{{ $message }}</span>
         @enderror
        </div>
        <div class="modal-footer">
          <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="close-modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit Voucher</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}

<div class="modal show" wire:ignore.self tabindex="-1" role="dialog" style="display: block;" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">

            <div class="modal-header">
                <h5 class="modal-title">
                   Apply Voucher
                </h5>
              
            </div>
            <div class="modal-body">
                <form wire:submit="checkCoupon"> 
                    <div class="form-group">
                        {{-- <label for="title">Apply Coupon</label> --}}
                        <input type="text" class="form-control" wire:model="coupon_code" name="coupon_code" class="form-control @error('coupon_code') is-invalid @enderror">
                        @error('coupon_code')
             <span class="text-danger">{{ $message }}</span>
         @enderror
                    </div>
                    <div class="modal-footer"> 
                    <button type="button" wire:click="closeModal" class="btn btn-secondary mt-4">Close</button>
                    
                    <button type="submit" class="btn btn-primary mt-4">
                        Apply
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif