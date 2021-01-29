<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
 
    public function metier () {
        return $this->belongsTo(Metier::class);
    }
    
    public function compte () {
        return $this->belongsToMany(Compte::class);
    }
}
