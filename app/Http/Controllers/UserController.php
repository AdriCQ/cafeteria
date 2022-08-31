<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Auth Login
     *
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function authLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400, [], JSON_NUMERIC_CHECK);
        }
        $validator = $validator->validate();
        // try auth
        if (!Auth::attempt(['email' => $validator['email'], 'password' => $validator['password']]))
            return response()->json(null, 401);
        $user = User::find(auth()->id());
        $user->tokens()->where('name', env('APP_URL'))->delete();
        $token = $user->createToken(env('APP_URL'))->plainTextToken;
        return (new UserResource($user))->additional(['api_token' => $token]);
    }

    /**
     * Auth Register
     *
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function authRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['nullable', 'email', 'unique:users', 'max:64'],
            'password' => ['required', 'string', 'confirmed'],

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 400, [], JSON_NUMERIC_CHECK);
        }
        $validator = $validator->validate();
        $user = new User($validator);
        $user->password = bcrypt($user->password);
        if ($user->save()) {
            $user->tokens()->where('name', env('APP_URL'))->delete();
            $token = $user->createToken(env('APP_URL'))->plainTextToken;
            return (new UserResource($user))->additional(['api_token' => $token]);
        } else {
            return response()->json($user->errors, 502, [], JSON_NUMERIC_CHECK);
        }
    }
}
