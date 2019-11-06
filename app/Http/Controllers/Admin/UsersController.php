<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    // Admin Methods
    public function index()
    {
        return view('Admin.Users.index')->with(['panel_title' => 'لیست کاربران']);
    }

    public function adduser()
    {
        return view('Admin.Users.new')->with(['panel_title' => 'افزودن کاربر جدید']);
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ],[
            'name.required' => '.لطفا نام کامل را وارد کنید.',
            'email.required' => 'لطفا ایمیل را وارد کنید.',
            'email.email' => '.ایمیل وارد شده معتبر نمی باشد',
            'password.required' => 'لطفا کلمه عبور را وارد کنید.',
            'password.min' => 'کلمه عبور باید حداقل 6 کاراکتر باشد.',
            'password.max' => 'کلمه عبور باید حداکثر 12 کاراکتر باشد.'
        ]);
        $user_data = [
            'user_name' => request()->input('name'),
            'user_email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet'),
        ];
        //dd($user_data);
        $New_User_Object = User::create($user_data);
    }
}
