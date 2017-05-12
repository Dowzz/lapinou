<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
	protected $fillable = [
        'id_livre', 'id_user', 'comment'
        ];
    public $timestamps = false;
}
