<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creneau extends Model
{
    use HasFactory;




    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'groupe_id');
    }
}
