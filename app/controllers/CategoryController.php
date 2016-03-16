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
        $list_product = $category->getProducts;
        return View::make("product")->with([
            "list_product" => $list_product
        ]);
    }
}