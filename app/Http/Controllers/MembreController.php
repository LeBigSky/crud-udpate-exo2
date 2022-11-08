<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function home (){
        $membres= Membre::all();
        return view('home', compact('membres'));
    }
    public function show ($id){
        $membre= Membre::find($id);
        return view('pages.show', compact('membre'));
    }
    public function delete ($id){
        $item= Membre::find($id);
        $item->delete();
        return redirect('/');
    }
    public function store (Request $request) {
        $store= new Membre();
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->genre= $request->genre;
        $store->save();
        return redirect('/');
    }
    public function create (){
        return view ('pages.create');
    }
    public function nuke () {
        $nuke= Membre::all();
        $nuke->delete();
        return redirect('/');
    }
    public function edit ($id){
        $edit= Membre::find($id);
        return view('pages.edit', compact('edit'));
    }
    public function update (Request $request, $id){
        $update= Membre::find($id);
        $update->nom= $request->nom;
        $update->age =$request->age;
        $update->genre=$request->genre;
        $update->save();
        return redirect('/');

    }
}
