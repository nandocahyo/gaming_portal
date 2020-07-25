<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'nama','email','discord','no_hp'
    ];

    protected $hidden = [

    ];

    public function players()
    {
        return $this->hasMany(Player::class, 'id_team');
    }
}
