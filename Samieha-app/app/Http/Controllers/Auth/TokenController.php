<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException();
        }

        return [                                //$request->deviceId
            'token' => auth()->user()->createToken('web')->plainTextToken
            // 'name' => auth()->user()->name

        ];
    }

    public function destroy(Request $request)
    {
        auth()->user()->tokens()->where('name', $request->deviceId)->delete();
    }
}
