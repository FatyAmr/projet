<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
   protected $fillable = ['marque','annee','prix'];
}
