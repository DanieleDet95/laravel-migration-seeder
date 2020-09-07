<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
      'targa',
      'modello',
      'marca',
      'anno',
      'dettagli',
    ];
}
