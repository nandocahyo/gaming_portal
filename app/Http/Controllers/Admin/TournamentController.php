<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tournament;
use App\TournamentCategory;

class TournamentController extends Controller
{
    public function index(Request $request)
    {
        $data['items'] = Tournament::with(['tournament_category'])->get();
        return view('pages.tournament',$data);
    }

    public function create()
    {
        $tournament_category = TournamentCategory::all();

        return view('pages.tournament-create',[
            'tournament_category' => $tournament_category
        ]);
    }

    public function store(Request $request)
    {
        //icon upload
        $image = $request->file('logo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('gambar-logo'), $new_name);
        
        $form_data = array(
            'id_category' => $request->id_category,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'logo' => $new_name
        );

        Tournament::create($form_data);
        return redirect()->route('tournament.index');
    }

    public function edit($id)
    {
        $item = Tournament::findOrFail($id);
        $tournament_category = TournamentCategory::all();

        return view('pages.tournament-edit',[
            'item' => $item,
            'tournament_category' => $tournament_category
        ]);
    }

    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('logo');

        if($image != '')
        {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar-logo'), $image_name);
        }
        else
        {
            $form_data = array(
            'id_category' => $request->id_category,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'logo' => $image_name
            );
            Tournament::whereId($id)->update($form_data);
        }
       
        return redirect()->route('tournament.index');
    }

    public function destroy($id)
    {
        
        $item = Tournament::findOrFail($id);
        //var_dump($item);
        $item->delete();

        return redirect()->route('tournament.index')->with('success','Pakckage deleted successfully');
    }
}
