<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationImmobilier extends Model
{
  protected $fillable = [
      'description', 'adresse', 'prix','nombreAppartement','titre','image','image1','image2',
  ];
}
