<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Models\User;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {

        return view('auth.register');
    }

    public function register(StoreRequest $request)
    {
        User::query()->create($request->validated());
        return to_route('home')->with('success', 'User created successfully!');
    }
}








