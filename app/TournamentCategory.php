<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentCategory extends Model
{
    protected $fillable = [
        'nama'
    ];

    protected $hidden = [

    ];

    public function tournament()
    {
        return $this->hasMany(Tournament::class);
    }
}
