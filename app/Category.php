<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $tablee = 'categories';
    protected $fillable = ['name', 'parent_id', 'is_active'];

    public function getAllCate(){
        $q = DB::table('categories as c')
            ->join('categories as sub_c','sub_c.parent_id','=','c.id')
            ->select('c.id','sub_c.id as child_id','c.name as name','sub_c.name as child_name');
        $result = $q->get();
        if( !empty($result) )
        {
            return $result;
        } else {
            return null;
        }

    }
}
