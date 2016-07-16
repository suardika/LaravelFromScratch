<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body'];

    // WHEN WE HAVE NOTE TO FETCH THE CARD
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
