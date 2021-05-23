<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistration;
use Illuminate\Support\Facades\Validator;
use Exception;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function singlePost()
    {
        return view('frontend.single-post');
    }
    public function showRegisterForm()
    {
        return view('frontend.auth.register');
    }
    public function registration(Request $request)
    {
       /* $request->validate([
            'name'      => 'required|string',
            'email'     => 'Required|email',
            'password'  => 'Required|min:6'
        ]);*/

        // $this->validate($request,[
        //     'name'      => 'required',
        //     'email'     => 'Required',
        //     'password'  => 'Required'
        // ]);
    /*    $rules = [
            'name'      => 'required|string',
            'email'     => 'Required|email',
            'password'  => 'Required|min:6'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect ()->back()
            ->withErrors($validator)
            ->withInput();
        } */
        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email',
            'password'  =>  ['required','min:6','confirmed'],
            //'photo'     =>  ['required','image']
        ]);
/*
        $photo      = $request->file('photo');
        
        if ($photo->isValid()){
            $file_name  = rand(11111, 999999).date('ymdhis.'). $photo->getClientOriginalName();
            $photo->storeAs('users', $file_name);
        }*/

        try {
            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => bcrypt($request->password),
            ]);
            session()->flash('type','success');
            session()->flash('message','User Registration success!');
        } catch (Exception $exception){
            session()->flash('type','danger');
            session()->flash('message', 'Fail');
        }   
        return redirect()->back();
    }

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email'     => 'required|email',
            'password'  =>  ['required','min:6']
        ]);

        if(auth()->attempt ($data)) {
            return redirect ('/');
        } else {
            session()->flash('type','danger');
            session()->flash('message', 'These credentials do not match our records.');
            return redirect()-> back();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
