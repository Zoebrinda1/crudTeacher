<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function index()
    {
        $matieres = Matiere::orderBy("id", "asc")->paginate(10);
        
      return view("matieres.matiere", compact("matieres"));  
    }
    public function create()
    {
      
      return view ("matieres.createMatiere");
    }
}
