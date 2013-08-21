<?php

class Joke extends Eloquent {

    public function user()
    {
        return $this->belongsTo('User');
    }

}