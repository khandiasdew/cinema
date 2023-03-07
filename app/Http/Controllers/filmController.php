<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\seats;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class filmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = film::all();
        return view('ui.film',compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.film.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        $film = film::create($request->all());
        if($request->file('gambar')){
            $file= $request->file('gambar');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $film['gambar']= $filename;
        }
        $film->save();
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = film::where('id_film', $id)->get()->first();
        return view('index', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = film::where('id_film',$id)->get()->first();
        return view('admin.film.edit', compact('film'));
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
        $film = film::find($id);
        $film->update($request->all());
        $film->save();
        return redirect()->route('film.index');
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
    }
    public function delete($id){

        $film = film::where('id_film', $id);
    $film->delete();
        return redirect()->route('admin.index');
    }
    public function deleteimg(Request $request){
        $film = film::find($request->id);

        unlink("public/".$film->gambar);

        film::where("id", $film->id)->delete();

        return back()->with("success", "film deleted successfully.");
    }
}
