<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('gauth_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/free-fire');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gauth_id'=> $user->id,
                    'gauth_type'=> 'google',
                    'password' => Hash::make('password')
                ]);
                Auth::login($newUser);
                return redirect('/admin');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
