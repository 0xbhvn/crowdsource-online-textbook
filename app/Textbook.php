<?php

namespace App;

class Textbook extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function textbook()
    {
        return $this->belongsTo(Textbook::class);
    }

    public function contribution()
    {
        return $this->hasMany(Contribution::class);
    }
}
