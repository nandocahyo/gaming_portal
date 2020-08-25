<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanding;
use App\Tournament;
use App\Team;
use App\Info;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home',[
            'tanding'       => Tanding::first(),
            'semifinal'     => Tanding::with(['team'])->where('score','2')->where('status','RUNNING')->first(),
            'final'         => Tanding::with(['team'])->where('score','3')->where('status','RUNNING')->first(),
            'tournament'    => Tournament::with(['tournament_category'])->get(),
            'team'          => Team::all(),
            'info'          => Info::all()
        ]);
    }

    public function match()
    {
        return view('pages.match');
    }
}
