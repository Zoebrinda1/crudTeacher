<?php

namespace App\Models;

use App\Models\Statut;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\EnseignantFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;
    protected $fillable= ["Nom", "Prénom", "Email","Téléphone", "statut_id" ];
    
    public function statut(){
        return  $this->belongsTo(Statut::class);
    }
}
