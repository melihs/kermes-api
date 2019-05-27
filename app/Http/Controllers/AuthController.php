<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Traits\Authenticatable;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\User as UserResource;

class AuthController extends Controller
{
    use Authenticatable;

    /**
     * @param  UserRequest  $request
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function register(UserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'email' => $validated['email'],
            'type' => $validated['type'],
            'password' => bcrypt($validated['password']),
        ]);

        return UserResource::collection(User::where('id','=',$user->id)->get());
    }

    /**
     * @param  Request  $request
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $user = $request->user();
            $user->api_token = $this->generateToken();
            $user->save();

            return UserResource::collection(User::where('id','=',$user->id)->get());
        }
    }

    /**
     * @param  Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $user = Auth::guard('api')->user();

        if (isset($user)) {
            $user->api_token = null;
            $user->save();
            return response()->json(['message'=>'user logged out']);
        }
    }
}
