<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\BlogTag;
use http\Env\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogtags = BlogTag::where('status',1)->get();
        return view('backend.blogs.form',compact('blogtags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $store = Blog::create($request->validated()+ ['user_id'=>Auth::user()->id]);
        $manager = new ImageManager(new Driver());
        if ($request->hasfile('image1')) {

            $photo_upload = $request->image1;
            $imageName = time() . '.' . $photo_upload->getClientOriginalExtension();
            $image = $manager->read($request->file('image1'));
            $image->toWebp(848, 356)->save(public_path('images/backend/' . $imageName));
        
            Blog::find($store->id)->update([
                'image1' => $imageName
            ]);
        }


        // $model = Service::find($store->id);

        // $model->image2 = $this->uploadAndSaveImage($request->file('image2'));
        // $model->image3 = $this->uploadAndSaveImage($request->file('image3'));
        // $model->image4 = $this->uploadAndSaveImage($request->file('image4'));
    
        // $model->save();

        return to_route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        
        $blogtags = BlogTag::where('status',1)->get();
        return view('backend.blogs.form',compact('blogtags','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $slug = Str::slug($request->name);
        $manager = new ImageManager(new Driver());
         $blog->update( $request->validated() + ['slug'=> $slug,'user_id'=>Auth::user()->id]);
             
         if ($request->hasfile('image1')) {
     
             $deleteoldphoto = $blog->image1;
             if ($deleteoldphoto) {
                 $path = ('images/backend/') . $deleteoldphoto;
                 if (file_exists($path)) {
                     unlink($path);
                 }
             }
             $photo_upload = $request->image1;
             $imageName = time() . '.' . $photo_upload->getClientOriginalExtension();
             $image = $manager->read($request->file('image1'));
             $image->toWebp(848, 356)->save(public_path('images/backend/' . $imageName));
         
             $blog->update([
                 'image1' => $imageName
             ]);
         }
     
        //  if ($request->hasfile('image2')) {
     
        //      $deleteoldphoto = $blog->image2;
        //      if ($deleteoldphoto) {
        //          $path = ('images/backend/') . $deleteoldphoto;
        //          if (file_exists($path)) {
        //              unlink($path);
        //          }
        //      }
        //      $photo_upload2 = $request->image2;
        //      $imageName2 = time() .'2'. '.' . $photo_upload2->getClientOriginalExtension();
        //      $image2 = $manager->read($request->file('image2'));
        //      $image2->toWebp(740, 480)->save(public_path('images/backend/' . $imageName2));
         
        //      $blog->update([
        //          'image2' => $imageName2
        //      ]);
        //  }
        //  if ($request->hasfile('image3')) {
     
        //      $deleteoldphoto = $blog->image3;
        //      if ($deleteoldphoto) {
        //          $path = ('images/backend/') . $deleteoldphoto;
        //          if (file_exists($path)) {
        //              unlink($path);
        //          }
        //      }
        //      $photo_upload3 = $request->image3;
        //      $imageName3 = time() .'3'. '.' . $photo_upload3->getClientOriginalExtension();
        //      $image3 = $manager->read($request->file('image3'));
        //      $image3->toWebp(740, 480)->save(public_path('images/backend/' . $imageName3));
         
        //      $blog->update([
        //          'image3' => $imageName3
        //      ]);
        //  }
        //  if ($request->hasfile('image4')) {
     
        //      $deleteoldphoto = $blog->image4;
        //      if ($deleteoldphoto) {
        //          $path = ('images/backend/') . $deleteoldphoto;
        //          if (file_exists($path)) {
        //              unlink($path);
        //          }
        //      }
        //      $photo_upload4 = $request->image4;
        //      $imageName4 = time() .'4'. '.' . $photo_upload4->getClientOriginalExtension();
        //      $image4 = $manager->read($request->file('image4'));
        //      $image4->toWebp(740, 480)->save(public_path('images/backend/' . $imageName4));
         
        //      $blog->update([
        //          'image4' => $imageName4
        //      ]);
        //  }
     
         return to_route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        $image1= $blog->image1;   
        // $image2= $blog->image2;   
        // $image3= $blog->image3;   
        // $image4= $blog->image4;   
        if ($image1) {
            $path = ('images/backend/') . $image1;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        // if ($image2) {
        //     $path = ('images/backend/') . $image2;
        //     if (file_exists($path)) {
        //         unlink($path);
        //     }
        // }
        // if ($image3) {
        //     $path = ('images/backend/') . $image3;
        //     if (file_exists($path)) {
        //         unlink($path);
        //     }
        // }
        // if ($image4) {
        //     $path = ('images/backend/') . $image4;
        //     if (file_exists($path)) {
        //         unlink($path);
        //     }
        // }
        $blog->delete();
        $route = route('admin.blogs.index');
        return response()->json(['status'=> 200 , 'route'=>$route]);
    }



    protected function uploadAndSaveImage($image)
    {
        $manager = new ImageManager(new Driver());
        $filename = time() . '_' . $image->getClientOriginalName();
        $path = public_path('images/backend/' . $filename);
        $image = $manager->read($image);
      
        $image->toWebp(848, 356)->save($path);
      

        return $filename;
    }

    public function multipleDestroy(Request $request)
    {

        $status = 200;
        $message = 'Blogs deleted successfully';
        $route = route('admin.blogs.index');

        foreach ($request->ids as $id) {
            $deleteItem = Blog::find( $id);

            if ($deleteItem) {
                $deleteItem->delete();
                $imagePath = public_path('images/backend/' . $deleteItem->image1);

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
