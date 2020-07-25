<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use App\Player;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $data['items'] = Player::with(['teams'])->get();
        return view('pages.team',$data);
    }

    public function create()
    {
        return view('pages.team-create');
    }

    public function store(Request $request)
    {
        Team::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'discord'   => $request->discord,
            'no_hp'     => $request->no_hp
        ]);

        Player::create([
            
            'player1'   => $request->player1,
            'level1'    => $request->level1,
            'player2'   => $request->player2,
            'level2'    => $request->level2,
            'player3'   => $request->player3,
            'level3'    => $request->level3,
            'player4'   => $request->player4,
            'level4'    => $request->level4,
            'player5'   => $request->player5,
            'level5'    => $request->level5
        ]);

        return redirect()->route('team.index');
    }
}
