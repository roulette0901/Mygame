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
 
    public function zone () {
        return $this->belongsTo(Serveur::class);
    }
 
    //public function race () {
      //  return $this->belongsTo(Race::class);
  //  }
}
