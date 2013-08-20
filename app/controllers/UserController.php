<?php

class UserController extends BaseController {

    public $restful = true;

    public function getLogin()
    {
        Return View::make('loginform');
    }

    public function getRegister()
    {
        Return View::make('registerform');
    }

    public function getLogout()
    {
        Auth::logout();
        Return Redirect::to('login')->with('message', 'Successfully logged out!');
    }

    public function postLogin()
    {
        $input = Input::all();
        $username = $input['username'];
        $password = $input['password'];
        if (Auth::attempt(array('username' => $username, 'password' => $password)))
        {
            return Redirect::intended('/');
        }else{
            return Redirect::to('login')->withErrors('Incorrect login details');
        }
    }

    public function postRegister()
    {
        // Get form field input
        $input = Input::all();
        $username = $input['username'];
        $email = $input['email'];
        $password = $input['password'];
        $password2 = $input['password2'];
        // Set up validation
        $validator = Validator::make(
            array(
                'username' => $username,
                'password' => $password,
                'password_confirmation' => $password2,
                'email' => $email,
            ),
            array(
                'username' => 'required|min:5|unique:users',
                'password' => 'required|min:6|confirmed',
                'email' => 'email|unique:users',
            )
        );
        // Test validation
        if($validator->passes()){
            $user = new User;
            $user->username = $username;
            $user->password = Hash::make($password);
            $user->email = $email;
            $user->save();
            return Redirect::to('login')->with('message', 'Successfully registered!');
        }else{
            return Redirect::to('register')->withErrors($validator);
        }
    }

}