<?php

namespace App\Http\Controllers;

use App\Film;
use App\Comment;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('films',['films'=>$films]);
    }

    public function afficher()
    {
        $films = Film::all();
        return view('gallery',['films'=>$films]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film=new Film();
        $file = $request->img;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . "." . $ext;
        $file->move('images/', $filename);
        


        $film->title=$request->title;
        $film->description=$request->description;
        $film->img=$filename;

        $film->save();
        return redirect('/films');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $id)
    {

        // echo $id;
       $comments= Comment::where('movie_id',$id->id)->get();
        return view('single')->with('single', $id)->with('comments',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $film=Film::find($id);

        return view('edit',["film"=>$film]);
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
       
        $film=Film::find($id);
        $film->title=$request->title;
        $film->description=$request->description;

        $film->update();

        return redirect(route("films"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->back();

        // Post::where('id', $id)->delete();
    }
}
