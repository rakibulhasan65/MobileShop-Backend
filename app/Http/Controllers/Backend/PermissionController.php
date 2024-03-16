<?php
namespace App\Http\Controllers\Backend;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\PermissionRole;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('admin.permissions.index');
        $permissions = Permission::latest()->get();

        return view('backend.permissions.index',compact('permissions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        Gate::authorize('admin.permissions.create');
        // $modules = Module::all();
        $modules = Module::latest()->get();

        return view('backend.permissions.form',compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('admin.modules.create');
        
        $this->validate($request,[
            'module_id' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:permissions',
            
        ]);

        $user = Permission::create([
            
            'module_id' => $request->module_id,
            'name' => $request->name,
            'slug' => $request->slug,
        ]);
        notify()->success('Module Successfully Added.', 'Added');
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        Gate::authorize('admin.permissions.edit');
      
        $modules = Module::latest()->get();
        return view('backend.permissions.form',compact('permission','modules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        Gate::authorize('admin.modules.create');
        
        $this->validate($request,[
            'module_id' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:permissions,slug,'.$permission->id,
            
        ]);

        $permission->update([
            
            'module_id' => $request->module_id,
            'name' => $request->name,
            'slug' => $request->slug,
        ]);
        notify()->success('Permission updated Successfully .', 'Updated');
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        Gate::authorize('admin.roles.destroy');
        $permissionRole = PermissionRole::where('permission_id',$permission->id)->first();

  
        if($permissionRole ==null)
        {
       
            $permission->delete();
            notify()->success("Permision Successfully Deleted", "Deleted");
        } else {
            notify()->error("Already Used in Permission Role.", "Error");
        }
  
        return back();
    }
}
