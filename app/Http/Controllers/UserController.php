<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return json users
     */
    public function index()
    {
        try{
            return UserResource::collection(User::all());
        }catch (\Exception $e){
            return response()->json([$e->getMessage()]);
        }
    }

    /**
     * user show
     *
     * @param  int  $id
     * @return json
     */
    public function show($id)
    {
        try {
            return new userResource(User::findOrFail($id));
        }catch (\Exception $e) {
            return response()->json([$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $validated = $request->validate([
                'name' => 'required|string',
                'surname' => 'nullable',
                'email' => 'required|email',
                'type' => 'required|string',
            ]);
            User::findOrFail($id)->update($validated);

            return response()->json(['user updated successfull']);
        }catch (\Exception $e){
            return response()->json([$e->getMessage()]);
        }
    }

    /**
     * user delete
     *
     * @param  int  $id
     * @return json
     */
    public function destroy($id)
    {
        try{
            $user = User::destroy($id);
            return response()->json(['user deleted successfull']);
        }catch (\Exception $e){
            return response()->json([$e->getMessage()]);
        }
    }
}
