<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
  public function profile() {
    # Pet belongs to Profile
    # Define an inverse one-to-many relationship.
    return $this->belongsTo('\App\Profile');
  }
}
