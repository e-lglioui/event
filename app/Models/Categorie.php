<?php

namespace App\Models;
 use App\Models\event;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'statu', 
    ];

    public function event()
    {
        return $this->hasMany(event::class);
    }
}
