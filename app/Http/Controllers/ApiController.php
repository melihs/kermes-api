<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;

class ApiController extends Controller
{

    public function store(Request $request)
    {
        return UserResource::collection(User::find($request->user()));
    }
}
