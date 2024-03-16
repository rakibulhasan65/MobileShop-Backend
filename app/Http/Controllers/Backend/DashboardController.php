<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//     public function __invoke(Request $request)
//     {
// //        Gate::authorize('admin-dashboard');
// //        return view('backend.dashboard');
//     }

    public function index (Request $request)
    {
        // Gate::authorize('admin.dashboard');

            $data['product'] = [];
            // $data['project'] = Project::count();
            // $data['service'] = Service::count();
            // $data['message'] = Message::where('status',0)->count();


        return view('backend.dashboard',$data);
    }
}
