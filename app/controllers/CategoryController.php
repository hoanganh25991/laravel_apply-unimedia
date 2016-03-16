<?php
/**
 * Created by PhpStorm.
 * User: Hoang Anh
 * Date: 16-Mar-16
 * Time: 10:33 AM
 */
class CategoryController extends BaseController{

    public function showList(){
        $list_category = Category::all();
        return View::make("category")->with([
            "list_category" => $list_category
        ]);
    }

    public function getOne(Category $category){
        //show products in this category
        $list_product = $category->getProducts;
        //handle action-delete a product
        if(Input::has("action")){
            $action = Input::get("action");
            $product_id = Input::get("product_id");
            $product = Product::find($product_id);
            //handle delete
            if($action === "delete"){
                $product->delete();
            }
            if($action === "edit"){
                //[warn]
                return Redirect::to("/product/".$product->id);
            }
            if($action === "view"){
                //[warn]
                return Redirect::to("/product/".$product->id);
            }
        }
        return View::make("product")->with([
            "list_product" => $list_product
        ]);
    }
}