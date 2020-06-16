<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'idVideo', 'themeVideo','auteurVideo', 'titreVideo','descriptionVideo', 'prixVideo', 'urlVideo' , 'boolEstGratuite'
    ];
    protected $table = 'video';
    protected $primaryKey = 'idVideo';
    public $timestamps = false;

    public function path()
    {
        return "/video/{$this->id}";
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }
}
