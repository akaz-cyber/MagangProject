<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view ('register.index',['title' =>'registration'] );
    }

    public function store(Request $request){

       $validatedata = $request->validate([
        'name' => 'required|max:255',
        'username' => ['required','min:3', 'max:255','unique:users'],
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255'
        ]);

        //cara pertama
        // $validatedata['password'] = bcrypt($validatedata['password']);

      $validatedata['password'] = hash::make($validatedata['password']);

  User::create($validatedata);
     // return $request->all();
//    $request->session()->flash();

    return redirect('/login')->with('success', 'registration success!! please login');
    }
}
