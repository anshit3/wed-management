<?php


namespace wedman\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use wedman\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'f_name' => 'max:50',
            'l_name' => 'max:50',
            'phone' => 'max:10|min:10',
            'email' => 'email|unique:users',
            'password' => 'min:5'
        ]);

        $fname = $request['f_name'];
        $lname = $request['l_name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->fname = $fname;
        $user->lname = $lname;
        $user->phone = $phone;
        $user->email = $email;
        $user->password = $password;

        $user->save();
        Auth::login($user);

        return redirect()->route('home');

    }

    public function loadHome()
    {
        return view('welcome');
    }

    public function loadAccount()
    {
        return view('Profile');
    }

    public function loadPlaceorder()
    {
        return view('PlaceOrder');
    }


    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email2' => 'required',
            'password' => 'min:5'
        ]);

        if (Auth::attempt(['email' => $request['email2'], 'password' => $request['password']])) {
            return redirect()->route('home');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return view('log_signup');
    }


    public function getAccount()
    {
        return view('Profile', ['user' => Auth::user()]);
    }

    public function loadedit()
    {
        return view('editProfile');
    }

    public function loadOrders()
    {
        return view('order');
    }

    public function postSave(Request $request)
    {
        $this->validate($request, [
            'fname' => 'max:50',
            'lname' => 'max:50',
            'phone' => 'max:10|min:10',
            'email' => 'email|unique:users',
        ]);

        $user = Auth::user();
        $user->fname = $request['fname'];
        $user->lname = $request['lname'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];
        $user->update();

        return redirect()->route('account');
    }

    public function getOrders()
    {
        if (Auth::check())
        {
            $i =0;
            $userorder = Auth::user()->orders()->get();
            return view('order' , ['userorder' => $userorder] , ['i' => $i]);
        }
    }

}