<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{       
    

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email', 
            'password' => 'required',
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->intended('home');
        }

        
        return redirect()->route('login')->with('error', 'Неверный логин или пароль');
    }
    public function showLoginForm(){
        return view('auth.login');
    }
    protected $redirectTo = '/profil'; 
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}



