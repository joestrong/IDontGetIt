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

    public function postLogin()
    {
        Return '';
    }

    public function postRegister()
    {
        //$input = Input::all();
        //print_r($input);
    }

}