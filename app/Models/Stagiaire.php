<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'filiere',
        'status',
        'date_naissance'
    ];

   public function notes(){
       return $this->hasMany(StagiaireModule::class);
   }

   public function moyenne(){
       return $this->notes()->avg('note');
   }
}

