<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tanding;

class TandingController extends Controller
{
    public function index(Request $request)
    {
        //return view('pages.tanding');
        $data['items'] = Tanding::get()->groupBy('id_tournament');
        return view('pages.tanding',$data);
    }

    public function create()
    {
        $item = Tanding::get()->groupBy('id_tournament');
        dd($item);
    }
}
