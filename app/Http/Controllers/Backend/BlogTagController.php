<?php

namespace App\Http\Controllers\Backend;

use App\Models\BlogTag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogTagRequest;
use App\Http\Requests\UpdateBlogTagRequest;
use App\Models\Blog;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogtags = BlogTag::all();
        return view('backend.blogTags.index',compact('blogtags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogTags.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogTagRequest $request)
    {
        $store = BlogTag::create($request->validated());
        return to_route('admin.blogtags.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogTag $blogTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogTag $blogTag, $id)
    {
        $blogTag = BlogTag::findorfail($id);
        return view('backend.blogTags.form',compact('blogTag'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogTag $blogTag, $id)
    {

        $update= $request->validate([
            'name' => [
                'required',
                 Rule::unique('blog_tags')->ignore($id),
            ],
            'slug'=>'nullable',
            'status'=>'nullable',

        ]);

   $slug = Str::slug($request->name);
   $blogtag = BlogTag::findorfail($id);
    $blogtag->update( $update + ['slug'=> $slug]);
      
        return to_route('admin.blogtags.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogTag $blogTag,$id)
    {
    $blogTag = BlogTag::findorfail($id);



    $checkService = Blog::where('blog_tag_id',$id)->first();

      

    if( $checkService !=null)
    {
            return back()->with('status','Already Have service data');
    }else{
        $blogTag->delete();
    }
       return back();

        
        return back();
    }
}
