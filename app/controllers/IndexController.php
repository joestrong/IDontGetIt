<?php

class IndexController extends BaseController {

	public function getIndex()
	{
        $jokes = Joke::all();
		return View::make('index')->with('jokes', $jokes);
	}

}