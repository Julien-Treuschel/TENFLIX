<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    protected $fillable = [
      'dateDebutAbonnement', 'dateFinAbonnement','boolEstAbo', 'idTypeAbonnement','idUtilisateur'
  ];
}