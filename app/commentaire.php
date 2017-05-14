<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
	 public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
	protected $fillable = [
        'id_livre', 'id_user', 'comment'
        ];
    public $timestamps = false;
}
