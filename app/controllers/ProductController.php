<?php
/**
 * Created by PhpStorm.
 * User: Hoang Anh
 * Date: 16-Mar-16
 * Time: 11:01 AM
 */
class ProductController extends BaseController{
    public function getOne(Product $product){
        return View::make("product-item")->with([
            "product" => $product
        ]);
    }

    public function saveOne(Product $product){
        if(Input::has("action")){
            $action = Input::get("action");
            if($action === "save"){

            }
        }
    }
}