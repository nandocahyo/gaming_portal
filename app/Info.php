<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'id_tournament','discord','price',
        'rules','banner'
    ];

    protected $hidden = [

    ];

    public function tournaments()
    {
        return $this->belongsTo(Tournament::class, 'id_tournament');
    }
}
