<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    protected $table = 'technical';
    protected $fillable = ['name','url','active'];
}
