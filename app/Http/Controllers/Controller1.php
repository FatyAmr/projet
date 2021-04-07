<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voitures;
class Controller1 extends Controller
{
    
public function index()
{
	$voitures = Voitures::latest()->paginate(5);
  
        return view('voitures.index',compact('voitures'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
}

 public function create()
    {
        return view('voitures.create');
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
            'marque' => 'required',
            'annee' => 'required',
            'prix' => 'required',
        ]);
  
        Voitures::create($request->all());
   
        return redirect()->route('voitures.index')
                        ->with('success','Voiture Ajoutée.');
    }
   
    public function show(Voitures $voiture)
    {
        return view('voitures.show',compact('voiture'));
    }
    public function edit(Voitures $voiture)
    {
        return view('voitures.edit',compact('voiture'));
    }
     
      public function update(Request $request, Voitures $voiture)
    {
        $request->validate([
            'marque' => 'required',
            'annee' => 'required',
            'prix' => 'required',
        ]);
  
        $voiture->update($request->all());
  
        return redirect()->route('voitures.index')
                        ->with('success','Voiture modifiée');
    }

     public function destroy(Voitures $voiture)
    {
        $voiture->delete();
  
        return redirect()->route('voitures.index')
                        ->with('success','Voiture supprimée');
    }


 
}
