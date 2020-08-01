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
        $data['items'] = Tanding::with(['team', 'tournament'])->where('status','RUNNING')->get();
        return view('pages.tanding',$data);
    }

    public function history(Request $request)
    {
        //return view('pages.tanding');
        $data['items'] = Tanding::with(['team', 'tournament'])->get();
        return view('pages.tanding-history',$data);
    }


    public function ronde1()
    {
        $item = Tanding::with(['team', 'tournament'])->where('score','0')->where('status','RUNNING')->get();
       
        return view('pages.tanding-ronde1',[
            'items' => $item
        ]);
    }

    public function ronde2()
    {
        $item = Tanding::with(['team', 'tournament'])->where('score','1')->where('status','RUNNING')->get();
       
        return view('pages.tanding-ronde2',[
            'items' => $item
        ]);
    }

    public function ronde3()
    {
        $item = Tanding::with(['team', 'tournament'])->where('score','2')->where('status','RUNNING')->get();
       
        return view('pages.tanding-ronde3',[
            'items' => $item
        ]);
    }

    public function final()
    {
        $item = Tanding::with(['team', 'tournament'])->where('score','3')->where('status','RUNNING')->get();
       
        return view('pages.tanding-final',[
            'items' => $item
        ]);
    }

    public function bracket()
    {
        $data['items'] = Tanding::with(['team', 'tournament'])->where('status','RUNNING')->get();
        return view('pages.tanding-bracket', $data);
    }

    public function score1(Request $request, $id)
    {
        $item = Tanding::findOrFail($id);
        $item->score = 1;
        $item->save();

        return redirect()->back();
    }

    public function score2(Request $request, $id)
    {
        $item = Tanding::findOrFail($id);
        $item->score = 2;
        $item->save();

        return redirect()->back();
    }

    public function score3(Request $request, $id)
    {
        $item = Tanding::findOrFail($id);
        $item->score = 3;
        $item->save();

        return redirect()->back();
    }

   
    public function update(Request $request, $id)
    {
        $item = Tanding::findOrFail($id)->first();
        $item = Tanding::where('status','RUNNING');
        $item->update(['status'=>'FINISH']);
        
        return redirect()->route('tanding.index');
    }
}
