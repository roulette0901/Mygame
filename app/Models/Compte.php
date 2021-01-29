<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
 
    public function serveur () {
        return $this->belongsTo(Serveur::class);
    }
 
    public function perso () {
        
        return $this->belongsToMany(Perso::class);
}

}