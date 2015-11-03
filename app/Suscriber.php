<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriber extends Model
{
  protected $fillable = ["email", "first_name", "last_name", "ip", "locale", "domain", "user_agent", "accepted_language"];
}
