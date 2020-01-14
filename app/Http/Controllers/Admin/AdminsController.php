<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticateUsers;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    use AuthenticateUsers;

    protected $guard = 'admin';
    protected $redirectTo = '/admin/';
    public function loginForm(){
        return view('admin.login');
    }

    protected function guard(){
        return Auth::guard($this->guard);
    }
}
