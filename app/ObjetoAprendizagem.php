<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetoAprendizagem extends Model
{
    protected $guarded = [];
    protected $table = 'objetos_aprendizagem';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
