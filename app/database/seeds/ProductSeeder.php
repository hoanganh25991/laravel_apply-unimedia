<?php
/**
 * Created by PhpStorm.
 * User: Hoang Anh
 * Date: 16-Mar-16
 * Time: 10:25 AM
 */
class ProductSeeder extends DatabaseSeeder{
    public function run(){
        DB::table('product')->insert(
            array(
                array('id'=>1, 'category_id'=>1, 'name'=>'thun'),
                array('id'=>2, 'category_id'=>1, 'name'=>'somi'),
                array('id'=>3, 'category_id'=>1, 'name'=>'vest'),
                array('id'=>4, 'category_id'=>2, 'name'=>'jean'),
                array('id'=>5, 'category_id'=>2, 'name'=>'kaki'),
                array('id'=>6, 'category_id'=>2, 'name'=>'tay'),
                array('id'=>7, 'category_id'=>3, 'name'=>'dong-ho'),
                array('id'=>8, 'category_id'=>3, 'name'=>'that-lung'),
                array('id'=>9, 'category_id'=>3, 'name'=>'non')
            )
        );
    }
}