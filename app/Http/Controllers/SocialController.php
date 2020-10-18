<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
//use Auth;
use App\User;
use Redirect;
use Socialite;

class SocialController extends Controller
{
    //Github
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    public function handleProviderCallback(){
        $user = Socialite::driver('github')->user();
        $auth_chk = User::where('provider_id', $User->getid())->where('email', $User->getEmail())->first();
        if ($auth_chk == 'null') {
            $us = User::insertGetId([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'provider_id' => $user->getId(),
                'provider' => 'github',
                'image' => $user->getAvatar(),
            ]);
            $find = User::findOrFail($us);

            Auth::login($find, true);
            return Redirect::to('home');
        }
        else{
            $check = User::where('provider_id', $User->getid())->where('email', $User->getEmail())->first();
            $find_check = User::findOrFail($check);
            Auth::login($find_check, true);
            return Redirect::to('home');
        }
    }
    //Google
    public function googleredirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googlehandleProviderCallback(){
        $user = Socialite::driver('google')->user();
        $auth_chk = User::where('provider_id', $User->getid())->where('email', $User->getEmail())->first();
        if ($auth_chk == 'null') {
            $us = User::insertGetId([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'provider_id' => $user->getId(),
                'provider' => 'google',
//                'image' => $user->getAvatar(),
            ]);
            $find = User::findOrFail($us);

            Auth::login($find, true);
            return Redirect::to('home');
        }
        else{
            $check = User::where('provider_id', $User->getid())->where('email', $User->getEmail())->first();
            $find_check = User::findOrFail($check);
            Auth::login($find_check, true);
            return Redirect::to('home');
        }
    }
    //Facebook
    public function facebookredirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookhandleProviderCallback(){
        $user = Socialite::driver('facebook')->user();
        $auth_chk = User::where('provider_id', $User->getid())->where('email', $User->getEmail())->first();
        if ($auth_chk == 'null') {
            $us = User::insertGetId([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'provider_id' => $user->getId(),
                'provider' => 'facebook',
//                'image' => $user->getAvatar(),
            ]);
            $find = User::findOrFail($us);

            Auth::login($find, true);
            return Redirect::to('home');
        }
        else{
            $check = User::where('provider_id', $User->getid())->where('email', $User->getEmail())->first();
            $find_check = User::findOrFail($check);
            Auth::login($find_check, true);
            return Redirect::to('home');
        }
    }
}
