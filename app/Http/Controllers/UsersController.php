<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('isadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users');
    }
    public function allData() {
        
        return view('users',['data' => User::all()]);
        // $user = User::all();
        // dd($user);


    }
    public function userInfo($id) {
        $user = new User;
        return view('user-info', ['user' => $user->find($id)]);
    }
    public function userDelete($id) {
        $user = new User;
        $username = $user->name;
        $user->find($id)->delete();
        return redirect()->route('users')->with('success', "Пользователь $username был удалён");
    }
}
