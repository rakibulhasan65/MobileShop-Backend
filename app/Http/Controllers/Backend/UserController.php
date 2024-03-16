<?php

namespace App\Http\Controllers\Backend;

use Image;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        Gate::authorize('admin.users.index');
        $users = User::all();
        $roles = Role::all();
        return view('backend.users.index',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin.users.create');
//        $roles = Role::getForSelect();
        $roles = Role::all();
        return view('backend.users.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    return $request->all();
//        return $request;

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'role_id' => 'required',
            'password' => 'required|confirmed|string|min:8',
            'avatar' => 'nullable'
        ]);
        // return $request->all();
        $user = User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->filled('status'),
        ]);
        // upload images
    

        $manager = new ImageManager(new Driver());
        if ($request->hasfile('avatar')) {

            $photo_upload = $request->avatar;
            $imageName = time() . '.' . $photo_upload->getClientOriginalExtension();
            $image = $manager->read($request->file('avatar'));
            $image->toWebp(300, 300)->save(public_path('images/backend/' . $imageName));
        
            User::find($user->id)->update([
                'avatar' => $imageName
            ]);
        }

        // notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        Gate::authorize('admin.users.index');

        return view('backend.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        Gate::authorize('admin.users.edit');
        $roles = Role::all();
        return view('backend.users.form', compact('roles','user'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users,email,'.$user->id,
            'role' => 'required',
            'password' => 'nullable|confirmed|string|min:8',
            'avatar' => 'nullable|image'
        ]);

//return $request;
        $user->update([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => isset($request->password) ? Hash::make($request->password) : $user->password,
            'status' => $request->filled('status'),
        ]);
        // upload images
        if ($request->hasFile('avatar')) {
            $user->clearMediaCollectionExcept('images', $user->getFirstMedia());
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Gate::authorize('admin.users.destroy');
        $user->delete();
        // notify()->success("User Successfully Deleted", "Deleted");
        return back();
    }
}
