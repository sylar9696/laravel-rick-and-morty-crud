<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $characters = Character::All();
        // dd($characters);

        return view('characters.index', compact('characters') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //validazione
        $request->validate(
            [
                'name' => 'required'
            ]
        );


        $data = $request->all();

        $new_character = new Character();
        $new_character->fill($data);
        $new_character->save();

        return redirect()->route( 'characters.show', $new_character );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Character $character )
    {

        // $character = Character::findOrFail($id);

        return view( 'characters.show', compact('character') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Character $character )
    {
        return view( 'characters.edit', compact('character') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {

        //validazione
        $request->validate(
            [
                'name' => 'required'
            ]
        );

        $data = $request->all();
        $character->update($data);

        // $data = $request->all();
        // $character->fill($data);
        // $character->save();

        return redirect()->route( 'characters.show', $character )->with('message', "Hai aggiornato con successo: $character->name");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        // $character = Character::findOrFail($id);

        $character->delete();
        return redirect()->route( 'characters.index' )->with('message', "Hai eliminato con successo: $character->name");
    }
}
