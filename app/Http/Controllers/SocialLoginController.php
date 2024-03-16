<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect('/home');

            }else{
                $newUser = User::create([
                    'role_id' => 4,
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => encrypt('my-google')
                ]);

                Auth::login($newUser);

                return redirect('/home');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


// Facebook Login

public function redirectToFB()
{
    return Socialite::driver('facebook')->redirect();
}

public function handleCallback()
{
    try {

        $user = Socialite::driver('facebook')->user();

        $finduser = User::where('social_id', $user->id)->first();

        if($finduser){

            Auth::login($finduser);

            return redirect('/home');

        }else{
            $newUser = User::create([
                'role_id'=>3,
                'name' => $user->name,
                'email' => $user->email,
                'social_id'=> $user->id,
                'social_type'=> 'facebook',
                'password' => encrypt('my-facebook')
            ]);

            Auth::login($newUser);

            return redirect('/home');
        }

    } catch (Exception $e) {
        dd($e->getMessage());
    }
}


}
