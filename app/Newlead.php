<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newlead extends Model
{
    protected $fillable = [
      'leadName',
      'leadMail'
    ];
}
