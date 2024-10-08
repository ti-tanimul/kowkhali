<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function adminRegister(){
        return view('admin.register');
    }

    public function adminRegisterStore(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),   
        ]);
        return redirect()->back()->with('success', 'Register Completed Successfully!');
    }

    public function adminLogin(){
        return view('admin.login');
    }

    public function adminloginCheck(Request $request){
        $adminlog = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($adminlog)){
            return redirect('/admin/dashboard')->with('msg', 'Login Success');
        }
        return back()->with('success', 'Email or Password Not Match');
    }
}
