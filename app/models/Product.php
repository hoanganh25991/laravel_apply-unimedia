<?php
/**
 * Created by PhpStorm.
 * User: Hoang Anh
 * Date: 16-Mar-16
 * Time: 10:12 AM
 */
class Product extends Eloquent{
    public $timestamps = false;
    public $fillable = ["category_id", "name", "price", "content", "status"];
    public $table = "product";

    //set relationship (category-product)'
    public function getCategory(){
        return $this->belongsTo('Category', "category_id");
    }
}