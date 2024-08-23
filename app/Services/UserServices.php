<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class UserServices
{
    public function imporUsers()
    {
        $respone = Http::get(env("API_USERS_IMPORT"));

        foreach($respone['data'] as $user) {

            $euser = User::where('email', $user['email'])->first();

            if(!$euser){

                $nUser = User::create([
                    'email' => $user['email'],
                    'name' => $user['first_name'] . " " . $user['last_name'],
                    'password' => Str::password(12),
                    'profile_photo_url' => $user['avatar']
                ]);

                $nUser->assignRole('cliente');
            }
        }

        return User::OrderBy('id', "DESC")->with('roles')->get();
    }
}
