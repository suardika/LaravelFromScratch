<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    // Relationship: Card has many note
    // FETCH ALL NOTES ACCOCIATED WITH THE CARD

    public function notes()
    {
//        return $this->hasMany('App\Note');
        return $this->hasMany(Note::class);
    }

//    public function path()
//    {
//        return '/cards/' . $this->id;
//    }

}
