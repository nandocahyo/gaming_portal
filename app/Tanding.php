<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanding extends Model
{
    protected $fillable = [
        'score','status'
    ];

    protected $hidden = [

    ];

    public function team()
    {
        return $this->belongsTo(Team::class, 'id_team');
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class, 'id_tournament');
    }
}
