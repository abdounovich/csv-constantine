<?php

namespace App\Models;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{

    protected $fillable = ['nom'];   
    
    use HasFactory;


    public function creanau()
    {
        return $this->hasMany(Creneau::class);
    }
    public function registration()
    {
        return $this->hasMany(Registration::class);
    }

 

}
