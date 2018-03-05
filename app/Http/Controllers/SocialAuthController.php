<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialAccountService;

class SocialAuthController extends Controller
{
    //
     public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback(SocialAccountService $service, $social)
    {
        $user = $service->createOrGetUser(Socialite::driver($social)->user(), $social);
        auth()->login($user);
        return redirect()->to('/home');
        // $user->token;
    }
}
