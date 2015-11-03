<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Introduce extends Model
{
    protected $table = 'introduce';

    protected $fillable = ['title', 'content', 'image' ,'is_active'];

    public function findAllIntroduce(){
        $q = DB::table($this->table)
            ->where('is_active','=',1)
            ->limit(1);
        $result = $q->get();
        if( !empty($result) ) {
            return $result;
        } else {
            return null;
        }
    }
}
