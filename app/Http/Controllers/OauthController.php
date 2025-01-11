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

				if (Auth::user()->role == 'user') {
					return redirect('/');
				} else {
					return redirect('/dashboard');
				}
            }else{
                $newUser = User::create([
                    'nama' => $user->name,
                    'email' => $user->email,
                    'gauth_id'=> $user->id,
                    'gauth_type'=> 'google',
                    'role'=> 'user',
                    'password' => Hash::make('p4$Sw0rd')
                ]);
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
