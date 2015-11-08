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
        $cate = new Category();
        $cateData = $cate->all();
        return view('admin.category.index', array('cate' => $cateData));
    }

    public function getCreate(Request $req) {
        //load category
        $cate = new Category();
        $cateData = $cate->all();
        $cateDataReturn = array();
        foreach($cateData as $items) {
            if( empty($items->parent_id) ) {
                $dataTemp['value'] = $items->id;
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
                'parent_id' => 'required',

            );
            $validator = Validator::make($data, $rules);

            if( $validator->fails() ) {
                $messages = $validator->messages();
                return Redirect::route('category.index')->withErrors($validator);
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
    public function getView(Request $req){
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ) {
            $cate = new Category();
            $cateData = $cate->findOrFail($id);

            if( !empty($cateData) ) {
                return view('admin.category.view',array('cate'=>$cateData));
            } else {
                return Redirect::route('category.index')->withErrors('Category Not found');
            }
        } else {
            return Redirect::route('category.index')->withErrors('Invalid Category Id');
        }
    }
    public function getEdit(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ) {
            $id = $req->input('id');
            if( !empty($id) && is_numeric($id) ) {
                $cate = new Category();
                $cateData = $cate->findOrFail($id);

                if( !empty($cateData) ) {
                    //get all child cate
                    $childCate = $cate->all();

                    $childCateData = array();
                    foreach($childCate as $items) {
                        if( empty($items->parent_id) ) {
                            $dataTemp['value'] = $items->id;
                            $dataTemp['name'] = $items->name;
                            array_push($childCateData, $dataTemp);
                        }
                    }
                    return view('admin.category.edit',array('cate'=>$cateData,'categories'=>$childCateData));
                } else {
                    return Redirect::route('category.index')->withErrors('Category Not found');
                }
            } else {
                return Redirect::route('category.index')->withErrors('Invalid Category Id');
            }
        }
    }
    public function postEdit(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ) {
            $data = $req->all();
            $rules = array(
                'name' => 'required|min:3|max:50',
                'parent_id' => 'required',

            );
            $validator = Validator::make($data,$rules);

            if( $validator->fails() ) {
                $messages = $validator->messages();
                return Redirect::route('category.index')->withErrors($validator);
            } else {
                $cate = new Category();
                $cateData = $cate->findOrFail($id);
                if( !empty($cateData) ) {
                    $cateData->name = $data['name'];
                    $cateData->parent_id = $data['parent_id'];
                    $cateData->is_active = $data['is_active'];

                    if( $cateData->save() ){
                        return Redirect::route('category.index')->withMessages('Edit Category Successful');
                    } else {
                        return Redirect::route('category.index')->withErrors('Something went wrong');
                    }
                } else {
                    return Redirect::route('category.index')->withErrors('Can not find Category, please try again!');
                }
            }
        } else {
            return Redirect::route('category.index')->withErrors('Invalid Category Id');
        }
    }
    public function delete(Request $req) {
        $id = $req->input('id');
        if( !empty($id) && is_numeric($id) ){
            $cate = new Category();
            $cateData = $cate->findOrFail($id);
            if( !empty($cateData) ){
                if( $cateData->delete() ){
                    return Redirect::route('category.index')->withMessages('Delete Category Successful');
                } else {
                    return Redirect::route('category.index')->withErrors('Something went wrong');
                }
            } else {
                return Redirect::route('category.index')->withErrors('Can not find Category, please try again!');
            }
        } else {
            return Redirect::route('category.index')->withErrors('Invalid Category Id');
        }
    }
}
?>