<?php

namespace App\Http\Controllers;

use App\Models\Statut;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function index()
    {
        $enseignants = Enseignant::orderBy("nom", "asc")->paginate(10);
        
      return view("enseignant", compact("enseignants"));  
    }

    public function create()
    {
      $statuts = Statut::all();
      return view ("createEnseignant", compact("statuts"));
    }


    public function edit(Enseignant $enseignant)
    {
      $statuts = Statut::all();
      return view ("editEnseignant", compact("enseignant", "statuts"));
    }


    public function store(Request $request)
    {
      $request->validate([
        "Nom"=>"required",
        "Prénom"=>"required",
        "Email"=>"required",
        "Téléphone"=>"required",
        "statut_id"=>"required"
      ]);

      Enseignant::create($request->all());
return back()->with("success", "Enseignant ajouté avec succes");




    }

    public function update(Request $request, $enseignant)
    {
      $request->validate([
        "Nom"=>"required",
        "Prénom"=>"required",
        "Email"=>"required",
        "Téléphone"=>"required",
        "statut_id"=>"required"
      ]);

      Enseignant::update($request->all());
return back()->with("success", "Enseignant mis à jour avec succes");



    }

    public function delete( Enseignant $enseignant)
    {
      $nom_complet = $enseignant->Nom ." ". $enseignant->Prénom;
      $enseignant->delete();

      return back()->with("successDelete", "Enseignant '$nom_complet' supprimer avec succès ");
    }


}
