<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();

        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'film_name'=>'required',
            'film_category'=> 'required',
            'film_description' => 'required'
        ]);
        $film = new Film([
            'film_name' => $request->get('film_name'),
            'film_category'=> $request->get('film_category'),
            'film_description'=> $request->get('film_description')
        ]);
        $film->film_name = $request->get('film_name');
        $film->film_category = $request->get('film_category');
        $film->film_description = $request->get('film_description');
        $film->save();
        return redirect('/films')->with('success', 'Stock has been added');
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
        $film = Film::find($id);

        return view('films.edit', compact('film'));
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
        $request->validate([
            'film_name'=>'required',
            'film_category'=> 'required',
            'film_description' => 'required'
        ]);

        $film = Film::find($id);
        $film->film_name = $request->get('film_name');
        $film->film_category = $request->get('film_category');
        $film->film_description = $request->get('film_description');
        $film->save();

        return redirect('/films')->with('success', 'Данные успешно обновлены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);
        $film->delete();

        return redirect('/films')->with('success', 'Stock has been deleted Successfully');
    }
}
