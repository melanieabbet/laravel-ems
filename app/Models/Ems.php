<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ems extends Model
{
    var $fillable = ['societe', 'adresse', 'numero_telephone'];

    public function numberOfRetraites()
    {
        return $this->hasMany(Retraite::class)->count();
    }
}