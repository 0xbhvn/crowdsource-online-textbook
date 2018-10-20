<?php

namespace App;

class Topic extends Model
{
    public function textbook()
    {
        return $this->belongsTo(Textbook::class);
    }

    public function contribution()
    {
        return $this->hasMany(Contribution::class);
    }
}
