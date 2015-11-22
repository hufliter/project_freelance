<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $table = 'recruitment';
    protected $fillable = ['job_title', 'position', 'quantity','salary','requirement','description','contact','active'];
}
