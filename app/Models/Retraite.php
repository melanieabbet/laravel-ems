<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retraite extends Model
{
    use HasFactory;
    var $fillable = ['nom', 'prenom', 'date_de_naissance', 'note', 'ems_id'];

    public function ems()
    {
        return $this->belongsTo(Ems::class);
    }
}
