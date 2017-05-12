<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
protected $fillable = [
        'couverture', 'titre', 'auteur', 'editeur', 'genre', 'description', 'format', 'parution', 'prix'
    ];


public $timestamps = false;
}
