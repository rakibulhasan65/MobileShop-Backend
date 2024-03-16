<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Blog;
use App\Models\User;
use App\Models\Brand;
use App\Models\BlogTag;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Subscription;
use App\Enums\StatusEnum;
use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Http\Resources\BlogsResource;
use App\Http\Resources\BrandResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SettingResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\BlogCategoryResource;
use Illuminate\Support\Facades\Validator;

class FrontendApiController extends Controller
{


    public function settings()
    {
        return new SettingResource(Setting::latest()->take(1)->first());
    }
    public function categories()
    {
        $category = Category::getCategories();
        // $category= Category::with(['subcategories'])->where('status',1)->get();

        return response()->json($category);
        // return new CategoryResource($category);

    }

    public function brands()
    {
        $brands = Brand::where('status',1)->get();

        return new BrandResource($brands);

    }

    public function products()
    {
        $products = Product::with(['category','brand'])->where('status',1)->get();

        return response()->json($products);

    }

    public function productSingle($slug)
    {
        $product = Product::with(['category','brand'])->where('product_slug',$slug)->first();
        $productAttributes = ProductAttribute::where('product_id',$product->id)->get();
        return response()->json([
            $product,
            $productAttributes
        ]);

    }

    public function categoryWiseProduct($slug)
    {
        $category = Category::where('category_slug',$slug)->first();
        $product = Product::with(['category','brand'])->where('category_id',$category->id)->where('status',1)->get();

        return response()->json([
            $product,

        ]);

    }
    public function brandWiseProduct($slug)
    {
        $category = Brand::where('brand_slug',$slug)->first();
        $product = Product::with(['category','brand'])->where('brand_id',$category->id)->where('status',1)->get();

        return response()->json([
            $product,

        ]);

    }

    public function users()
    {
        return User::all();
    }




    public function couponCheck(Request $request)
    {



        $coupon = Coupon::where('coupon_code',$request->coupon_code)->first();

        if($coupon )
        {
            $expireDate =  $coupon->expiry_date;
            $currentdata = date('Y-m-d');
            if($expireDate < $currentdata | $coupon->status==1)
            {
                return response()->json([
                    'message'=> "Coupon Code Date Expired or Used",

                ]);
            }else{
                return response()->json([
                    'message'=> "Coupon Code Accepted",
                    'coupon_code_amount'=> $coupon->amount,
                ]);
            }


        }else{
            return response()->json([
                'message'=> "Invalid Coupon code",
            ]);
        }

    }



    public function subscription(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscriptions',
        ]);

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first();
            $response = [
                'status'  => false,
                'message' => $errorMessage,
            ];
            return response()->json($response, 401);
        }

        Subscription::create([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        return response()->json([
            'message'=> "Subscription Successfully Added",
        ]);
    }


    public function blogs()
    {
        // return new BrandResource($brands);

        $blogs = Blog::where('status',1)->get();
        return BlogsResource::collection($blogs);
    }

    public function singleBlog($slug)
    {
        // return new BrandResource($brands);

        $blog = Blog::where('slug',$slug)->first();
        return new BlogResource($blog);
    }


    public function blogCategories()
    {
        // return new BrandResource($brands);

        $blogs = BlogTag::where('status',1)->get();
        return BlogCategoryResource::collection($blogs);
    }

    public function categoryWiseBlog($slug)
    {
        // return new BrandResource($brands);
        $blogCat = BlogTag::where('slug',$slug)->first();
        $blog = Blog::where('blog_tag_id',$blogCat->id)->get();
        return new BlogResource($blog);
    }

}
