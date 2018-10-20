<?php

namespace App;

class Textbook extends Model
{
    public function topic()
    {
        return $this->hasMany(Topic::class);
    }
}
