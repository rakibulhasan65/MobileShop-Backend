<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use DOMDocument;
use Validator;
use ValidationException;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('status','1')->orderBy('category_name', 'asc')->latest()->get();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $validatedData = $request->validate([
                'category_name' => 'required|string|max:255',
                'shortDescription' => 'nullable|string|max:255',
                'url' => 'nullable|string|max:255',
                'category_discount' => 'nullable|numeric|min:0',
                'meta_title' => 'nullable|string|max:255',
                'meta_descriptions' => 'nullable|string|max:255',
                'meta_keywords' => 'nullable|string|max:255',
            ]);

//        return response()->json($request);
            $category = new Category();
            $category->parent_id = '20';
            $category->category_name = $request->category_name;
            $category->category_slug = slugify($request->category_name);
            $category->shortDescription = $request->shortDescription;
            $category->url = $request->url;
            $category->category_discount = $request->category_discount;
            $category->meta_title = $request->meta_title;
            $category->meta_descriptions = $request->meta_descriptions;
            $category->meta_keywords = $request->meta_keywords;
            $category->status = $request->status;

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

                $category->meta_keywords = $metaDescription;
                $category->save();
            }


//            if ($request->hasFile('category_image')) {
//                $image = $request->file('category_image');
//                $image_name = time() . $category->slug . '.' . 'webp';
//
//                $subdirectory = 'uploads/category/';
//
//                $dir = storage_path($subdirectory);
//                if (!file_exists($dir)) {
//                    mkdir($dir, 0777, true);
//                }
//                $uploadedImage = $request->file('category_image');
//                $uploadedImage->storeAs($subdirectory, $image_name, 'public');
//
//                $category->category_image = $image_name;
//            }


            $manager = new ImageManager(new Driver());
            if ($request->hasfile('category_image')) {
                $photo_upload = $request->category_image;
                $imageName = time() . '.' . $photo_upload->getClientOriginalExtension();
                $image = $manager->read($request->file('category_image'));
                $image->toWebp(480, 480)->save(public_path('images/backend/' . $imageName));
                $category->category_image = $imageName;
            }

            $category->save();
            notify()->success("Category created successfully!");
            return redirect()->route('categories.index');

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
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'category_name' => 'required|string|max:255',
                'shortDescription' => 'nullable|string|max:255',
                'url' => 'nullable|string|max:255',
                'category_discount' => 'nullable|numeric|min:0',
                'meta_title' => 'nullable|string|max:255',
                'meta_descriptions' => 'nullable|string|max:255',
                'meta_keywords' => 'nullable|string|max:255',
            ]);
//        return response()->json($request);
            $category = Category::findOrFail($id);
            $category->parent_id = '20';
            $category->category_name = $request->category_name;
            $category->category_slug = slugify($request->category_name);
            $category->shortDescription = $request->shortDescription;
            $category->url = $request->url;
            $category->category_discount = $request->category_discount;
            $category->meta_title = $request->meta_title;
            $category->meta_descriptions = $request->meta_descriptions;
            $category->meta_keywords = $request->meta_keywords;
            $category->status = $request->status;

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

                $category->meta_keywords = $metaDescription;
                $category->save();
            }


            if ($request->hasFile('category_image')) {

                $imagePath = 'images/backend/' . $category->brand_image;

                if (Storage::disk('public')->exists($imagePath)) {
                    Storage::disk('public')->delete($imagePath);
                }

                $manager = new ImageManager(new Driver());
                if ($request->hasfile('category_image')) {
                    $photo_upload = $request->category_image;
                    $imageName = time() . '.' . $photo_upload->getClientOriginalExtension();
                    $image = $manager->read($request->file('category_image'));
                    $image->toWebp(480, 480)->save(public_path('images/backend/' . $imageName));
                    $category->category_image = $imageName;
                }
            }


//                $image = $request->file('category_image');
//                $image_name = time() . $category->slug . '.' . 'webp';
//
//                $subdirectory = 'uploads/category/';
//
//                $dir = storage_path($subdirectory);
//                if (!file_exists($dir)) {
//                    mkdir($dir, 0777, true);
//                }
//                $uploadedImage = $request->file('category_image');
//                $uploadedImage->storeAs($subdirectory, $image_name, 'public');
//
//                $category->category_image = $image_name;
//            }

            $category->save();
            notify()->success("Category created successfully!");
            return redirect()->route('categories.index');

        } catch (ValidationException $e) {
            return redirect()->back()->withInput($e->validator->getData())->withErrors($e->validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoryDelete = Category::findOrFail($id);
        $imagePath = 'images/backend/' . $categoryDelete->brand_image;
        if ($categoryDelete) {
            $categoryDelete->delete();
            if (is_file($imagePath)){
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
        $message = 'Category deleted successfully';
        $route = route('categories.index');

        foreach ($request->ids as $id) {
            $deleteItem = Category::find( $id);

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
