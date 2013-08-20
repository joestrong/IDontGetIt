<?php

class JokeController extends BaseController{

    public function getCreate()
    {
        return View::make('jokes.create');
    }

    public function postCreate()
    {
        return 'Created joke';
    }

}