<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'id_category','nama','tanggal',
        'logo'
    ];

    protected $hidden = [

    ];

    public function tournament_category()
    {
        return $this->belongsTo(TournamentCategory::class, 'id_category');
    }

    public function infos()
    {
        return $this->hasMany(Info::class);
    }
}
