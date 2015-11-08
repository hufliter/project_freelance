<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProductsController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $req) {
        $products = new Products();
        $productsData = $products->all();
        return view('admin.products.index',array('products'=>$productsData));
    }
    public function getCreate(Request $req){
        return view('admin.products.create');
    }
}
?>