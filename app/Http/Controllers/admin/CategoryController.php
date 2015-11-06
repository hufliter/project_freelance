<?php
namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $req){
        return view('admin.category.index');
    }

    public function getCreate(Request $req) {
        //load child category
        $cate = new Category();
        $cateData = $cate->all();
        $cateDataReturn = array();
        foreach($cateData as $items) {
            if( !empty($items->parent_id) ) {
                $dataTemp['id'] = $items->id;
                $dataTemp['name'] = $items->name;
                array_push($cateDataReturn, $dataTemp);
            }
        }
        return view('admin.category.create', array('categories'=> $cateDataReturn));
    }
    public function postCreate(Request $req) {
        $data = $req->all();
        if( !empty($data) ) {
            $rules = array(
                'name' => 'required|min:3|max:50|unique:categories',
                'parent_id' => 'required|numeric',
                'is_active' => 'required'
            );
            $validator = Validator::make($data, $rules);

            if( $validator->fails() ) {
                $messages = $validator->messages;
                return Redirect::route('category.index')->withErrors($messages);
            } else {
                $cate = new Category();
                $cate->name = $data['name'];
                $cate->parent_id = $data['parent_id'];
                $cate->is_active = $data['is_active'];

                if( $cate->save() ) {
                    return Redirect::route('category.index')->withMessages('Create Category Successful');
                } else {
                    return Redirect::route('category.index')->withErrors('Something went wrong');
                }
            }
        } else {
            return Redirect::route('category.index')->withErrors('Invalid given data');
        }
    }
}
?>