<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Log;

class ProfileController extends Controller
{
    public function index ()
    {
       

        Gate::authorize('admin.profile.index'); 
        return view('backend.profile.index');
    }
 
    public function update(Request $request)
    {
        Log::info($request);
    $manager = new ImageManager(new Driver());
        if($request->hasfile('avatar')) {
            $user = Auth::user();
            $deleteoldphoto = User::find(Auth::user()->id)->avatar;
            if ($deleteoldphoto) {
                $path = public_path('images/backend/') . $deleteoldphoto;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
        if($request->hasfile('avatar')){
            $photo_upload = $request->avatar;
            $filename = time() . '.' . $photo_upload->getClientOriginalExtension();

            $image = $manager->read($request->file('avatar'));
            $image->toWebp(300, 300)->save(public_path('images/backend/' . $filename));

        // Get logged in user
        $user = Auth::user();
        // Update user info
        $user->update([
            'avatar' => $filename,
//            'name' => $request->name,
//            'email ' => $request->email,
//            'facebook_id ' => $request->facebook_id,
//            'google_id ' => $request->google_id,
//            'active_status ' => $request->active_status,
        ]);
      
        // return with success msg
        notify()->success('Profile Successfully Updated.', 'Updated');
        return redirect()->back();
    }
    }
    public function changePassword()
    {
        Gate::authorize('admin.profile.password');
        return view('backend.profile.security');
    }

//    public function updatePassword(UpdatePasswordRequest $request)
    public function updatePassword(Request $request)
    {
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                Auth::user()->update([
                    'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('login');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
        return redirect()->back();
    }
}
