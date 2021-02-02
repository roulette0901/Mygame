<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Serveur;
use App\Models\Compte;
use App\Models\Metier;
use App\Models\Perso;
use Illuminate\Http\Request;

class MetierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metiers = Metier::all();
        return view('metiers.list', ['metiers'=> $metiers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persos = Perso::all();
        return view('metiers.form', ['persos'=>$persos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $metier = new Metier();
        $metier->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';
        
        $metier->save();
        
        if($request->comptes) {
           $comptes = Compte::find($request->comptes);
           $metier->comptes()->saveMany($comptes);
        }
        $metier->save();

        
        $action = new Action();
        $action->model = 'metier';
        $action->action = 'create';

        $action->save();
        
        return redirect('/metiers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metier  $metier
     * @return \Illuminate\Http\Response
     */
    public function show(Metier $metier)
    {
        return view('metiers.one', ['metier'=>$metier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metier  $metier
     * @return \Illuminate\Http\Response
     */
    public function edit(Metier $metier)
    {
        $comptes = Compte::all();
        return view('metiers.edit', ['metier'=>$metier, 'comptes'=>$comptes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Metier  $metier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metier $metier)
    {
        $metier->name = $request->has('name') && strlen($request->name) ? $request->name : $metier->name;
        
        if($request->persos) {
            $persos = Perso::find($request->persos);
            $metier->persos()->saveMany($persos);
        }
        
        $metier->save();

        
        $action = new Action();
        $action->model = 'metier';
        $action->action = 'update';

        $action->save();
        
        return redirect('/metiers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metier  $metier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metier $metier)
    {
        $metier->delete();

        
        $action = new Action();
        $action->model = 'metier';
        $action->action = 'delete';

        $action->save();
        return redirect('/metiers');
    }
}
