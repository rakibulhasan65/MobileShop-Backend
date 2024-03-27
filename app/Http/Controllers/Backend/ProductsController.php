<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $products = Product::where('status', '1')->latest()->get();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $brands = Brand::all();
        $colors = Color::all();
        return view('backend.products.create', compact('category', 'brands', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // return $request->all();
        try {

            $manager = new ImageManager(new Driver());

            Log::info($request);
//            return response()->json($request);

            $validatedData = $request->validate([
                'categories' => 'required|integer',
                'brands' => 'required|integer',
                'colors' => 'required|integer',
                'product_name' => 'required|string',
                'product_price' => 'required|numeric',
                'discount_option' => 'required|in:1,2,3',
                'discounted_price' => 'required_if:discount_option,2,3|numeric',
                'sku' => 'required|string',
                'quantity' => 'required|integer',
                'kt_ecommerce_add_product_options.*.product_option' => 'required|string',
                'kt_ecommerce_add_product_options.*.product_option_name' => 'required|string',
                'kt_ecommerce_add_product_options.*.product_option_price' => 'required|numeric',
                'kt_ecommerce_add_product_options.*.product_option_stock' => 'required|integer',
                'meta_title' => 'required|string',
                'add_product_meta_keywords' => 'nullable|string',
                'product_image' => 'nullable|image',
            ]);

        if ($request->discount_option == 1) {
               
                 $product_discount="";
                 $finalPrice = $request->product_price;
                 
            } elseif ($request->discount_option == 2) {
                $finalPrice = $request->product_price - ($request->product_price * $request->product_discount_percent / 100);
                 $product_discount=$request->product_price * $request->product_discount_percent / 100;
                
            } else {
                $product_discount=$request->product_discount;
                $finalPrice = ($request->product_price - $request->product_discount);
                
            }
            
            $products = new Product();
            $products->product_name = $request->product_name;
            $products->sku = $request->sku;
            $products->product_slug = slugify($request->product_name);
            $products->product_price = $request->product_price;
            $products->discount_type = $request->discount_option;
            $products->product_discount = $product_discount;
            $products->final_price = $finalPrice;
            $products->category_id = $request->categories;
            $products->brand_id = $request->brands;
            $products->color_id = $request->colors;

            if ($request->hasfile('product_image')) {
                $products_upload = $request->product_image;
                $imageName = time() . '.' . $products_upload->getClientOriginalExtension();
                $image = $manager->read($request->file('product_image'));
                $image->toWebp(480, 480)->save(public_path('images/backend/' . $imageName));
                $products->product_image = $imageName;
            }


            $products->product_descriptions = $request->product_descriptions;
            $products->meta_title = $request->meta_title;
            $products->meta_descriptions = $request->meta_descriptions;
            $products->meta_keywords = $request->meta_keywords;

            $products->stock = $request->quantity;
            $products->status = $request->status;


            //   SummerNote Products Description
//            $productsDescription = $request->add_product_description;
//            if ($productsDescription) {
//                $dom = new DOMDocument();
//                $dom->loadHTML($productsDescription, 9);
//                $images = $dom->getElementsByTagName('img');
//                foreach ($images as $key => $img) {
//                    $imgAttribute = $img->getAttribute('img');
//                    if ($imgAttribute) {
//                        $imgParts = explode(';', $imgAttribute);
//                        if (isset($imgParts[1])) {
//                            $base64Data = explode(',', $imgParts[1]);
//                            if (isset($base64Data[1])) {
//                                $data = base64_decode($base64Data[1]);
//                                $image_name = "/uploads/products-description/" . time() . $key . 'png';
//                                file_put_contents(public_path() . $image_name, $data);
//                                $img->removeAttribute('src');
//                                $img->setAttribute('src', $image_name);
//                            }
//                        }
//                    }
//                }
//                $productsDescription = $dom->saveHTML();
//
//                $products->product_descriptions = $productsDescription;
//                $products->save();
//            }


            //   SummerNote Meta Description
//            $meta_descriptions = $request->add_product_meta_description;
//            if ($meta_descriptions) {
//                $dom = new DOMDocument();
//                $dom->loadHTML($meta_descriptions, 9);
//                $images = $dom->getElementsByTagName('img');
//                foreach ($images as $key => $img) {
//                    $imgAttribute = $img->getAttribute('img');
//                    if ($imgAttribute) {
//                        $imgParts = explode(';', $imgAttribute);
//                        if (isset($imgParts[1])) {
//                            $base64Data = explode(',', $imgParts[1]);
//                            if (isset($base64Data[1])) {
//                                $data = base64_decode($base64Data[1]);
//                                $image_name = "/uploads/meta-description/" . time() . $key . 'png';
//                                file_put_contents(public_path() . $image_name, $data);
//                                $img->removeAttribute('src');
//                                $img->setAttribute('src', $image_name);
//                            }
//                        }
//                    }
//                }
//                $metaDescription = $dom->saveHTML();
//
//                $products->meta_descriptions = $metaDescription;
//                $products->save();
//            }

            $products->save();

            $lastInsertedProductId = $products->id;

            $variationsItems = $request->kt_ecommerce_add_product_options;
            foreach ($variationsItems as $variationItem) {
                $data = new ProductAttribute();
                $data['product_id'] = $lastInsertedProductId;
                $data['product_option'] = $variationItem['product_option'];
                $data['product_option_name'] = $variationItem['product_option_name'];
                $data['product_option_price'] = $variationItem['product_option_price'];
                $data['product_option_stock'] = $variationItem['product_option_stock'];
                $data->save();
            }


            if ($request->hasFile('productsGallery')) {
                $dataStorage = $request->file('productsGallery');
                foreach ($dataStorage as $galleryImage) {
                    $product_image = new ProductImage();

                    $products_upload = $galleryImage;
                    $imageName = time() . '.' . $products_upload->getClientOriginalExtension();
                    $image = $manager->read($products_upload);
                    $image->toWebp(480, 480)->save(public_path('images/backend/' . $imageName));

                    $product_image->product_id = $lastInsertedProductId;
                    $product_image->product_image = $imageName;
                    $product_image->save();
                }
            }


            notify()->success("Products created successfully!");
            return redirect()->route('products.index');

        } catch (ValidationException $e) {
            return redirect()->back()->withInput($e->validator->getData())->withErrors($e->validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::all();
        $brands = Brand::all();
        $colors = Color::all();
        $products = Product::find($id);

        $findCategory = Category::find($products->category_id);
        $findBrand = Brand::find($products->brand_id);
        $findColor = Color::find($products->color_id);

        return view('backend.products.edit', compact('category', 'brands', 'colors','products','findCategory','findBrand','findColor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteFindId = Product::findOrFail($id);
        $imagePath = 'images/backend/' . $deleteFindId->product_image;
        if ($deleteFindId) {
            $deleteFindId->delete();
          if(is_file($imagePath)){
              if (Storage::disk('public')->exists($imagePath)) {
                  Storage::disk('public')->delete($imagePath);
              }
          }
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 404, 'message' => 'Category not found'], 404);
        }
    }

    public function multipleDestroy(Request $request)
    {
        $status = 200;
        $message = 'Products deleted successfully';
        $route = route('products.index');

        foreach ($request->ids as $id) {
            $deleteItem = Product::find( $id);

            if ($deleteItem) {
                $deleteItem->delete();
                $imagePath = public_path('images/backend/' . $deleteItem->product_image);

                if (file_exists($imagePath) && is_file($imagePath)) {
                    unlink($imagePath);
                }

            } else {
                $status = 404;
                $message = 'One or more posts not found';
            }
        }
        // Return the response after the loop
        return response()->json(['status' => $status, 'message' => $message, 'route' => $route]);
    }
}
