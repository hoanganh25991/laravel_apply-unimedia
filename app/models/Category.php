<?php
/**
 * Created by PhpStorm.
 * User: Hoang Anh
 * Date: 16-Mar-16
 * Time: 10:10 AM
 */
class Category extends Eloquent{
    public $timestamps = false;
    public $fillable = ["name"];
    public $table = "category";

    //set relationship (category-product)'
    public function getProducts(){
        return $this->hasMany('Product');
    }
}