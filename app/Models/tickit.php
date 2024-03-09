<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\event;
class tickit extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'prix',
        'quantite',
        'valider',
       
    ];
    
    public function event()
    {
        return $this->belongsTo(event::class);
    }
}
