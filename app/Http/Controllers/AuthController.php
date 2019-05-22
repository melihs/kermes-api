<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Resources\User as UserResource;

class AuthController extends Controller
{

    public function register(UserRequest $request)
    {
        $validated = $request->validated();
        $token = Str::random(80);
        $user = User::create([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'email' => $validated['email'],
            'type' => $validated['type'],
            'password' => bcrypt($validated['password']),
            'api_token' => hash('sha256',$token)
        ]);

        return UserResource::collection(User::orderBy('created_at','desc')->take(1)->get());
    }

    public function login()
    {

    }
}
