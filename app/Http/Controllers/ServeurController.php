<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Serveur;
use App\Models\Compte;
use App\Models\Metier;
use App\Models\Perso;
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
        
        return view('serveurs.form');
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


        $action = new Action();
        $action->model = 'serveur';
        $action->action = 'create';

        $action->save();
        
        
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
        
        return view('serveurs.edit', ['serveur'=>$serveur]);
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
        
        $serveur->save();

        $action = new Action();
        $action->model = 'serveur';
        $action->action = 'update';

        $action->save();


        
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

        $action = new Action();
        $action->model = 'serveur';
        $action->action = 'detele';

        $action->save();

        return redirect('/serveurs');
    }
}
