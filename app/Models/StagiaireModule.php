<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StagiaireModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'stagiaire_id',
        'module_id',
        'note',
        'date_exam'
    ];

    public function stagiaire(){
        return $this->belongsTo(Stagiaire::class);
    }

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
