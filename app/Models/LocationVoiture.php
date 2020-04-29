<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationVoiture extends Model
{
  protected $fillable = [
      'description', 'adresse', 'prix','titre','image','image1','image2',
  ];
}
