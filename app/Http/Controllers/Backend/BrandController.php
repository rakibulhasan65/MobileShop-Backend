<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::where('status','1')->orderBy('brand_name', 'asc')->latest()->get();
        return view('backend.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $validatedData = $request->validate([
                'brand_name' => 'required|string|max:255',
                'shortDescription' => 'nullable|string|max:255',
                'url' => 'nullable|string|max:255',
                'brand_discount' => 'nullable|numeric|min:0',
                'meta_title' => 'nullable|string|max:255',
                'meta_descriptions' => 'nullable|string|max:255',
                'meta_keywords' => 'nullable|string|max:255',
            ]);

//        return response()->json($request);
            $brands = new Brand();
            $brands->brand_name = $request->brand_name;
            $brands->brand_slug = slugify($request->brand_name);
            $brands->shortDescription = $request->shortDescription;
            $brands->url = $request->url;
            $brands->brand_discount = $request->brand_discount;
            $brands->meta_title = $request->meta_title;
            $brands->meta_descriptions = $request->meta_descriptions;
            $brands->meta_keywords = $request->meta_keywords;
            $brands->status = $request->status;

            //   SummerNote Description
            $metaDescription = $request->meta_keywords;
            if ($metaDescription) {
                $dom = new DOMDocument();
                $dom->loadHTML($metaDescription, 9);
                $images = $dom->getElementsByTagName('img');
                foreach ($images as $key => $img) {
                    $imgAttribute = $img->getAttribute('img');
                    if ($imgAttribute) {
                        $imgParts = explode(';', $imgAttribute);
                        if (isset($imgParts[1])) {
                            $base64Data = explode(',', $imgParts[1]);
                            if (isset($base64Data[1])) {
                                $data = base64_decode($base64Data[1]);
                                $image_name = "/uploads/meta-description/" . time() . $key . 'png';
                                file_put_contents(public_path() . $image_name, $data);
                                $img->removeAttribute('src');
                                $img->setAttribute('src', $image_name);
                            }
                        }
                    }
                }
                $metaDescription = $dom->saveHTML();

                $brands->meta_keywords = $metaDescription;
                $brands->save();
            }

            $manager = new ImageManager(new Driver());
            if ($request->hasfile('brand_image')) {
                $photo_upload = $request->brand_image;
                $imageName = time() . '.' . $photo_upload->getClientOriginalExtension();
                $image = $manager->read($request->file('brand_image'));
                $image->toWebp(480, 480)->save(public_path('images/backend/' . $imageName));
                $brands->brand_image = $imageName;
            }

//            if ($request->hasFile('brand_image')) {
//                $image = $request->file('brand_image');
//                $image_name = time() . $brands->slug . '.' . 'webp';
//
//                $subdirectory = 'uploads/Brands/';
//
//                $dir = storage_path($subdirectory);
//                if (!file_exists($dir)) {
//                    mkdir($dir, 0777, true);
//                }
//                $uploadedImage = $request->file('brand_image');
//                $uploadedImage->storeAs($subdirectory, $image_name, 'public');
//
//                $brands->brand_image = $image_name;
//            }

            $brands->save();
            notify()->success("Brands created successfully!");
            return redirect()->route('brands.index');

        } catch (ValidationException $e) {
            return redirect()->back()->withInput($e->validator->getData())->withErrors($e->validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brands = Brand::findOrFail($id);
        return view('backend.brands.edit', compact('brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $validatedData = $request->validate([
                'brand_name' => 'required|string|max:255',
                'shortDescription' => 'nullable|string|max:255',
                'url' => 'nullable|string|max:255',
                'brand_discount' => 'nullable|numeric|min:0',
                'meta_title' => 'nullable|string|max:255',
                'meta_descriptions' => 'nullable|string|max:255',
                'meta_keywords' => 'nullable|string|max:255',
            ]);

//        return response()->json($request);
            $brands = Brand::findOrFail($id);
            $brands->brand_name = $request->brand_name;
            $brands->brand_slug = slugify($request->brand_name);
            $brands->shortDescription = $request->shortDescription;
            $brands->url = $request->url;
            $brands->brand_discount = $request->brand_discount;
            $brands->meta_title = $request->meta_title;
            $brands->meta_descriptions = $request->meta_descriptions;
            $brands->meta_keywords = $request->meta_keywords;
            $brands->status = $request->status;

            //   SummerNote Description
            $metaDescription = $request->meta_keywords;
            if ($metaDescription) {
                $dom = new DOMDocument();
                $dom->loadHTML($metaDescription, 9);
                $images = $dom->getElementsByTagName('img');
                foreach ($images as $key => $img) {
                    $imgAttribute = $img->getAttribute('img');
                    if ($imgAttribute) {
                        $imgParts = explode(';', $imgAttribute);
                        if (isset($imgParts[1])) {
                            $base64Data = explode(',', $imgParts[1]);
                            if (isset($base64Data[1])) {
                                $data = base64_decode($base64Data[1]);
                                $image_name = "/uploads/meta-description/" . time() . $key . 'png';
                                file_put_contents(public_path() . $image_name, $data);
                                $img->removeAttribute('src');
                                $img->setAttribute('src', $image_name);
                            }
                        }
                    }
                }
                $metaDescription = $dom->saveHTML();

                $brands->meta_keywords = $metaDescription;
                $brands->save();
            }


            $manager = new ImageManager(new Driver());
            if ($request->hasfile('brand_image')) {

                $imagePath = 'images/backend/' . $brands->brand_image;

                if (Storage::disk('public')->exists($imagePath)) {
                    Storage::disk('public')->delete($imagePath);
                }

                $photo_upload = $request->brand_image;
                $imageName = time() . '.' . $photo_upload->getClientOriginalExtension();
                $image = $manager->read($request->file('brand_image'));
                $image->toWebp(480, 480)->save(public_path('images/backend/' . $imageName));
                $brands->brand_image = $imageName;
            }


//            if ($request->hasFile('brand_image')) {
//                $image = $request->file('brand_image');
//                $image_name = time() . $brands->slug . '.' . 'webp';
//
//                $subdirectory = 'uploads/Brands/';
//
//                $dir = storage_path($subdirectory);
//                if (!file_exists($dir)) {
//                    mkdir($dir, 0777, true);
//                }
//                $uploadedImage = $request->file('brand_image');
//                $uploadedImage->storeAs($subdirectory, $image_name, 'public');
//
//                $brands->brand_image = $image_name;
//            }

            $brands->save();
            notify()->success("Brands Updated successfully!");
            return redirect()->route('brands.index');

        } catch (ValidationException $e) {
            return redirect()->back()->withInput($e->validator->getData())->withErrors($e->validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brandsDelete = Brand::findOrFail($id);
        $imagePath = 'images/backend/' . $brandsDelete->brand_image;
        if ($brandsDelete) {
            $brandsDelete->delete();
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }

            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 404, 'message' => 'Brands not found'], 404);
        }
    }

    public function multipleDestroy(Request $request)
    {
        $status = 200;
        $message = 'Brands deleted successfully';
        $route = route('brands.index');

        foreach ($request->ids as $id) {
            $deleteItem = Brand::find( $id);
            if ($deleteItem) {
                $deleteItem->delete();
                $imagePath = public_path('images/backend/' . $deleteItem->brand_image);
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
