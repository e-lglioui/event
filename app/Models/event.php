<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\localisation;
use App\Models\tickit;
class event extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'descreption',
        'overture',
        'fermeture',
        'statue',
        'categorie_id',
        'localisation_id',
        'org_id',
        'img',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
    public function localisation()
    {
        return $this->belongsTo(localisation::class);
    }
    public function tickits(){
        return $this->hasMany(tickit::class);
    }
}
