<?php

namespace App\Services;
use App\SocialFacebookAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialFacebookAccount::whereProvider($social)
                    ->whereProviderUserId($providerUser->getId())
                    ->first();
     
        // $row_count = SocialFacebookAccount::count()+1;
        // $number = str_pad($row_count, 4, '0', STR_PAD_LEFT);
        // $provider =  strtoupper(substr($social, 0 , 1));
        // $id = $number.$provider;

        if ($account) {
            return $account->user;
        } else {
            $account = new SocialFacebookAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $social
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => md5(rand(1,10000)),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}