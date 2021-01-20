<?php

namespace App\Http\Controllers;

use App\Models\Serveur;
use App\Models\Compte;
use Illuminate\Http\Request;

class ServeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serveurs = Serveur::all();
        return view('serveurs.list', ['serveurs'=> $serveurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comptes = Compte::all();
        return view('serveurs.form', ['serveurs'=>$comptes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serveur = new Serveur();
        $serveur->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';
        
        $serveur->save();
        
        if($request->comptes) {
           $comptes = compte::find($request->comptes);
           $serveur->comptes()->saveMany($comptes);
        }
        $serveur->save();
        
        return redirect('/serveurs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function show(Serveur $serveur)
    {
        return view('serveurs.one', ['serveur'=>$serveur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function edit(Serveur $serveur)
    {
        $comptes = Compte::all();
        return view('serveurs.edit', ['serveur'=>$serveur, 'comptes'=>$comptes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serveur $serveur)
    {
        $serveur->name = $request->has('name') && strlen($request->name) ? $request->name : $serveur->name;
        
        if($request->comptes) {
            $comptes = compte::find($request->comptes);
            $serveur->comptes()->saveMany($comptes);
        }
        
        $serveur->save();
        
        return redirect('/serveurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serveur $serveur)
    {
        $serveur->delete();
        return redirect('/serveurs');
    }
}
