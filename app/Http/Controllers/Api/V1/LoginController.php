<?php

namespace App\Http\Controllers\Api\V1;

use DB;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\AuthUserResource;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    /**
     * Registration Req
     */
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email',
            // 'password' => 'required|min:8',
            'password' => 'required|confirmed|string|min:8',
        ]);

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first();
            $response = [
                'status'  => false,
                'message' => $errorMessage,
            ];
            return response()->json($response, 401);
        }
        //    $validator= $this->validate($request, [
        //         'name' => 'required|min:4',
        //         'email' => 'required|email',
        //         'password' => 'required|min:8',
        //     ],[
        //         'name.required'=> "Please Enter your Name",
        //         'email.required'=> "Please Enter your Email",
        //     ]);



        \DB::transaction(function() use ($request) {
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role_id'=>3,
                'status'=>1,
            ]);

        });

        return response()->json([
            'message' => 'Registration Successfull'
        ], 200);
    }


    /**
     * Login Req
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {

            $token = auth()->user()->createToken('auth-token')->plainTextToken;
            $userdata = new AuthUserResource(Auth::user());
            return response()->json([
                'message' => 'Login Successfull',
                'token' => $token,
                'data' => $userdata

            ], 200);
        } else {
            return response()->json(['error' => 'email or password doesnt macth'], 401);
        }
    }
    /**
     * Log out Req
     */
    public function logout(Request $request)
    {

        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'User Successfull logout',

        ], 200);

    }






// get user info
    public function userInfo(Request $request)
    {


        return response()->json([
            'message' => 'User sucessfully fetched',
            'data' => new AuthUserResource(Auth::user()),
        ], 200);

    }

    public function changePassword(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|min:8|max:100',
            'confirm_password' => 'required|same:password'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Validator fails',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = $request->user();
        if(Hash::check($request->old_password, $user->password)){
            $user->update([
                'password'=> Hash::make( $request->password)
            ]);
            return response()->json([
                'message' => 'Password Successfully Changed',
            ], 200);
        }else{
            return response()->json([
                'message' => 'Old Password doesnot matched',
                'errors' => $validator->errors()
            ], 400);
        }



    }
    public function profileDetails()
    {


        return response()->json([
            'message' => 'User info details',
            'data' => new AuthUserResource(Auth::user()),
        ], 200);


    }

    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Validator fails',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = Auth::user();

        $user->update( $request->all());

        return response()->json([
            'message' => 'Profile Successfully Updated',
        ], 200);


        return response()->json(['data' => $data], 200);

    }

}
