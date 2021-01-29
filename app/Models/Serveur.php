<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function compte () {
        return $this->hasMany(Compte::class);
    }

}
