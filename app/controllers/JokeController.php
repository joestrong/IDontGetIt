<?php

class JokeController extends BaseController{

    public function getCreate()
    {
        return View::make('jokes.create');
    }

    public function postCreate()
    {
        $input = Input::all();
        $joketext = $input['joke'];
        $explanation = $input['explanation'];
        $validator = Validator::make(
            array('joke' => $joketext),
            array('joke' => 'required|min:5')
        );
        if($validator->passes()){
            $joke = new Joke;
            $joke->joke = $joketext;
            $joke->explanation = $explanation;
            $joke->user_id = Auth::user()->id;
            $joke->save();
            return Redirect::to('/')->with('message', 'Successfully added a new joke!');
        }else{
            return Redirect::to('/jokes/create')->withErrors($validator);
        }
    }

}