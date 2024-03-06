<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\event;
class localisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'ville',
    ];
    public function events(){
        return $this->hasMany(event::class);
    }
}
