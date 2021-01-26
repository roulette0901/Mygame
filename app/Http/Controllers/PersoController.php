<?php

namespace App\Http\Controllers;


use App\Models\Serveur;
use App\Models\Compte;
use App\Models\Metier;
use App\Models\Perso;
use Illuminate\Http\Request;

class PersoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persos = Perso::all();
        return view('persos.list', ['persos'=> $persos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $metiers = Metier::all();
        return view('persos.form', ['metiers'=>$metiers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perso = new Perso();
        $perso->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';

        
        $metier = Metier::find($request->metier);
        if($metier) {
            $perso-> metier()->associate($metier);
        }
        
        $perso->save();
        return redirect('/persos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perso  $perso
     * @return \Illuminate\Http\Response
     */
    public function show(Perso $perso)
    {
        return view('persos.one', ['perso'=>$perso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perso  $perso
     * @return \Illuminate\Http\Response
     */
    public function edit(Perso $perso)
    {
        $metiers = Metier::all();
        return view('persos.edit', ['perso'=>$perso, 'metier'=>$metier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perso  $perso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perso $perso)
    {
        $perso->name = $request->has('name') && strlen($request->name) ? $request->name : $perso->name;
        //$race = Race::find($request->race);
        $metier = Metier::find($request->metier);
        $perso->metier()->associate($metier);
        $perso->save();
        
        return redirect('/persos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perso  $perso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perso $perso)
    {
        $perso->delete();
        return redirect('/persos');
    }
}
