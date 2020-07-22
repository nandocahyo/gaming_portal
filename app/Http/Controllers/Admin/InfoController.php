<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Info;
use App\Tournament;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Info::with(['tournaments'])->get();
        return view('pages.info',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournament = Tournament::all();

        return view('pages.info-create',[
            'tournament' => $tournament
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $form_data = array(
            'id_tournament' => $request->id_tournament,
            'discord'       => $request->discord,
            'price'         => $request->price,
            'rules'         => $request->rules
        );

        Info::create($form_data);
        return redirect()->route('info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Info::findOrFail($id);
        $tournament = Tournament::all();

        return view('pages.info-edit',[
            'item' => $item,
            'tournament' => $tournament
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = array(
            'id_tournament'  => $request->id_tournament,
            'discord'       => $request->discord,
            'price'         => $request->price,
            'rules'         => $request->rules,
            );

        Info::whereId($id)->update($form_data);
      
        return redirect()->route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Info::findOrFail($id);
        //var_dump($item);
        $item->delete();

        return redirect()->route('info.index')->with('success','Pakckage deleted successfully');
    }
}
