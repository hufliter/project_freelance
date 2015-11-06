<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $tablee = 'categories';
    protected $fillable = ['name', 'parent_id', 'is_active'];

}
