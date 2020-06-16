<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    //
    protected $fillable = [
        'commentaire','idVideo','idUtilisateur'
    ];

    // protected $with = ('user');

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function video() {
        return $this->belongsTo(Video::class);
    }


}
