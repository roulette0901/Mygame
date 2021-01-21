<?php

namespace App\Http\Controllers;

use App\Models\Serveur;
use App\Models\Compte;
use App\Models\Metier;
use App\Models\Perso;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comptes = Compte::all();
        return view('comptes.list', ['comptes'=> $comptes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serveurs = Serveur::all();
        return view('comptes.form', ['serveurs'=>$serveurs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compte = new Compte();
        $compte->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';        
        $compte->save();
        return redirect('/comptes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function show(Compte $compte)
    {
        return view('comptes.one', ['compte'=>$compte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function edit(Compte $compte)
    {
        $serveurs = Serveur::all();
        return view('comptes.edit', ['compte'=>$compte, 'serveur'=>$serveur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compte $compte)
    {
        $compte->name = $request->has('name') && strlen($request->name) ? $request->name : $compte->name;
        $serveur = Serveur::find($request->serveur);
        $compte->serveur()->associate($serveur);
        $compte->save();
        
        return redirect('/comptes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compte $compte)
    {
        $compte->delete();
        return redirect('/comptes');
    }
}
