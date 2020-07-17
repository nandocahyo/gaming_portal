<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect,Response;
use App\TournamentCategory;

class TournamentCategoryController extends Controller
{
    public function index()
    {
        $data['posts'] = TournamentCategory::all();
        return view('pages.tournament-category',$data);
    }

    public function store(Request $request)
    {  
        $postID = $request->post_id;
        $post   =   TournamentCategory::updateOrCreate(['id' => $postID],
                    ['nama' => $request->nama]);
    
        return Response::json($post);
    }

    public function edit($id)
    {
        //
        $where = array('id' => $id);
        $post  = TournamentCategory::where($where)->first();
 
        return Response::json($post);
    }

    public function destroy($id)
    {
        //
        $post = TournamentCategory::where('id',$id)->delete();
        return Response::json($post);
    }
}
