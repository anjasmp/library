<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function boooks()
    {
        return $this->hasMany(Book::class);
    }


}
