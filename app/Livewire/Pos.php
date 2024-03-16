<?php

namespace App\Livewire;

use DB;
use Cart;
use session;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class Pos extends Component
{
    public $search = '';
    public $productInCarts;
    public $discount=0;
    public $showModal = false;
    // public $coupon_code;
    public $couponAmount;
    public $couponCode;

    // for checout
    public $coupon_code_code;
    public $order_invoice;
    public $total;
    public $coupon_amount =0;
    public $grand_total;
    public $name;
    public $address;
    public $city;
    public $state;
    public $country;
    public $zip_code;
    public $mobile;
    public $email;
    public $order_status;
    public $payment_method;
    public $payment_gateway;
   
    public $isOpen = 0;
 
    public function create()
    {
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function addCart($id)
    {
        $product = Product::findorfail($id);
       

        Cart::add([
            'id' => $product->id, 
            'name' => $product->product_name, 
            'qty' => 1, 
            'price' => $product->final_price, 
            ]);

    }
    public function removeCartItem($id)
    {
        Cart::remove($id);
    }
    public function qtyPlus($id)
    {
      
       
       Cart::update($id, ['qty' => Cart::get($id)->qty + 1]);
    }
    public function qtyMinus($id)
    {
      
       
       Cart::update($id, ['qty' => Cart::get($id)->qty - 1]);
    }

    #[Rule('required')]
    public $coupon_code;
    
    public function checkCoupon()
    {

// dd($this->coupon_code);

        $coupon = Coupon::where('coupon_code',$this->coupon_code)->first();
   
        if($coupon )
        {
            $expireDate =  $coupon->expiry_date;
            $currentdata = date('Y-m-d');  
            if($expireDate < $currentdata | $coupon->status==1)
            {
                
                session()->flash('error','Coupon Code Date Expired or Used');
                $this->isOpen = false;
                // $this->reset();
                $this->coupon_code='';
                $this->couponAmount=0;
            }else{
            //    dd($coupon->amount);
                $this->couponAmount = $coupon->amount;
                $this->couponCode = $coupon->coupon_code;
                $this->isOpen = false;
                $this->coupon_code='';
                // $this->reset();

            }
               
           
        }else{
           session()->flash('error','Invalid Coupon Code');
           $this->isOpen = false;
           $this->couponAmount=0;
        //    $this->reset();
        }
        
    }

   
public function checkOut()
{
    // DB::beginTransaction();

    $carttotal =  number_format((str_replace(',', '', Cart::total()) - $this->couponAmount),2);
    $order= Order::create([
        'user_id'=>Auth::user()->id,
        'order_invoice'=>Str::random(10). Auth::user()->id,
        'total'=>Cart::total(),
        'coupon_code'=>$this->coupon_code,
        'coupon_amount'=>$this->coupon_amount,
        // 'shipping_charge'=>$this->shipping_charge,
        'grand_total'=>$carttotal,
        'name' =>$this->name,
        'address'=>$this->address,
        'city'=>$this->city,
        'state'=>$this->state,
        'country'=>$this->country,
        'zip_code'=>$this->zip_code,
        'mobile'=>$this->mobile,
        'email'=>$this->email,
        'order_status'=>'processing',
        'payment_method'=>"cash",
        'payment_gateway'=>"cash",
        'customer_status'=>1,
       
    ]);
  
    if($this->coupon_code =!null && $this->coupon_amount =!null)
    {
        $coupon_status = 1;
    }
    foreach (Cart::content() as $row) {

        OrderDetail::create([
            'user_id'=>Auth::user()->id,
            'order_id'=> $row->id,
            'product_id'=>$row->id ,
            'quantity'=>$row->qty ,
            'product_price'=>$row->price ,
            'coupon_status'=>$coupon_status,
            // 'created_at'=>now(),
            // 'updated_at'=>now(),
        ]);

        // $insert_data[] = $data;

    }
    // OrderDetail::insert($insert_data);
 
    
    // DB::commit();
}

    public function render()
    {
 
        // $this->productInCarts = Cart::content();
        return view('livewire.pos', [
            'products' => Product::where('product_name', 'like', '%' . $this->search . '%')->get(),
            // 'endTotal' =>$this->discount + Cart::total(),
        ]);
    }
}
