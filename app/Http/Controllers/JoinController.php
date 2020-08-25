<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{
    public function join()
    {
        return view('pages.form-tanding');
    }

    public function register_team(Request $request)
    {
        //icon upload
        $image = $request->file('logo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('gambar-team'), $new_name);

        $team= Team::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'discord'   => $request->discord,
            'no_hp'     => $request->no_hp,
            'logo'      => $new_name
        ]);

        Player::create([
            'id_team'   => $team->id,
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

        return redirect()->route('pages.home');
    }
}
