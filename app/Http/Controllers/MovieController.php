<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $movie=movie::all();
        return view('/index',compact('movie'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_movie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // movie::create($request -> all());
        $movie=new movie;
        $movie->name=$request->input('name');
        $movie->desc=$request->input('desc');
        $movie->gener=$request->input('gener');
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extintion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extintion;
            $file->move('images',$filename);
            $movie->image=$filename;
        }
        $movie->save();
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single=movie::find($id);
        return view('single',compact('single'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie=movie::find($id);
        return view('edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $update_operation = movie::find($id);
        // // $update_operation = $request->movie_name;
        // // $update_operation = $request->movie_description;
        // // $update_operation = $request->movie_gener;
        // $update_operation->update($request->all());
        $movie=new movie;
        $movie=movie::find($id);
        $movie->name=$request->input('name');
        $movie->desc=$request->input('desc');
        $movie->gener=$request->input('gener');
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extintion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extintion;
            $file->move('images',$filename);
            $movie->image=$filename;
        }
        $movie->save();
        

        return redirect('/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=movie::find($id);
        $del->delete();
        return redirect('/index');
    }
}
