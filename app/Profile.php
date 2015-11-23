<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public function pet() {
    # Profile has many Pets
    # Define a one-to-many relationship.
    return $this->hasMany('\App\Pet');
  }
}
