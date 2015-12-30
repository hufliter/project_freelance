<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'cate_id', 'slug','description','usage','is_active'];

    public function findAllProducts(){
        $q = DB::table('products as p')
            ->leftJoin('categories as c','c.id','=','p.cate_id')
            ->select('p.id as product_id', 'p.name as product_name ','p.image' , 'p.slug', 'p.usage', 'p.description as product_description ', 'p.created_at' , 'p.updated_at','p.is_active as product_active')
            ->addSelect('c.id as cate_id','c.name as cate_name');
        $result = $q->get();
        if( !empty($result) ){
            return $result;
        } else {
            return null;
        }
    }

    public function findProductById($id){
        $q = DB::table('products as p')
            ->leftJoin('categories as c','c.id','=','p.cate_id')
            ->where('p.id','=',$id)
            ->select('p.id as product_id', 'p.image' ,'p.name as product_name ' , 'p.slug', 'p.usage', 'p.description as product_description ', 'p.created_at' , 'p.updated_at','p.is_active as product_active','p.size','p.weight','p.package','p.words','p.solder','p.is_popular')
            ->addSelect('c.id as cate_id','c.name as cate_name');
        $result = $q->get();
        if( !empty($result) ){
            return $result[0];
        } else {
            return null;
        }
    }

    public function getPopularProductsByCateId($cate_id){
        $q = DB::table('products as p')
            ->where('p.cate_id','=',$cate_id)
            ->where('p.is_popular','=', 1)
            ->where('p.is_active','=',1)
            ->orderBy('p.updated_at','desc')
            ->take(4);
        $result = $q->get();

        if( !empty($result) ) {
            return $result;
        } else {
            return null;
        }
    }
}
