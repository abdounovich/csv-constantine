<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{

    protected $fillable = ['nom', 'prenom', 'email','date_naissance','address','duree','prix_abonnement','prix_reste',"nom_pere"
,"telephone_pere","telephone","nom_pere","transport","sexe","badge_url","groupe_id","documents"];   

    /**
     * Get the groupe associated with the Registration
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

}
