<?php

namespace App\Http\Controllers\Backend;

use Image;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        
        // Gate::authorize('admin.profile.index');
        $setting = Setting::where('id',1)->first();
        return view('backend.settings.index',compact('setting'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
       

        $this->validate($request,[
            
            'site_name' => 'string|nullable',
            
            'copyright' => 'string|nullable',
            'slogan' => 'string|nullable',
            'meta_description' => 'string|nullable',
            'meta_keywords' => 'string|nullable',
            'about_site' => 'string|nullable',
            'facebook' => 'string|nullable',
            'google' => 'string|nullable',
            'google_plus' => 'string|nullable',
            'twiter' => 'string|nullable',
            'contact' => 'string|nullable',
            'email' => 'string|nullable',
            'address' => 'string|nullable',
            
        ]);

        $setting = Setting::where('id', 1)->update([
            'site_name' => $request->site_name,
            'copyright' => $request->copyright,
            'slogan' => $request->slogan,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'about_site' => $request->about_site,
            'facebook' => $request->facebook,
            'google' => $request->google,
            'google_plus' => $request->google_plus,
            'twiter' => $request->twiter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'contact' => $request->contact,
            'email' => $request->email,
            'webmail' => $request->webmail,
            'address' => $request->address,
        ]);

      
        notify()->success('Setting Successfully Updated.', 'Update');
        return redirect()->route('admin.settings.index');

    }

    public function sitelogo(Request $request)
    {
        $manager = new ImageManager(new Driver());
        if($request->hasfile('site_logo')) {
            $sitelogo = Setting::find(1);
            $deleteoldphoto = Setting::find($sitelogo->site_logo);
            if ($deleteoldphoto) {
                $path = public_path('images/backend/') . $deleteoldphoto;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
        if($request->hasfile('site_logo')){
           
            $photo_upload = $request->site_logo;
            $filename = time() . '.' . $photo_upload->getClientOriginalExtension();
            $image = $manager->read($request->file('site_logo'));
            $image->toWebp(255, 75)->save(public_path('images/backend/' . $filename));
                // Get logged in user
        $setting = Setting::find(1);
        // Update user info
        $setting->update([
            'site_logo' => $filename
            
        ]);
    }
    notify()->success('Setting Successfully Updated.', 'Update');
    return redirect()->route('admin.settings.index');
    }
}
