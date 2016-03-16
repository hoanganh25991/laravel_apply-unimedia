<?php
/**
 * Created by PhpStorm.
 * User: Hoang Anh
 * Date: 16-Mar-16
 * Time: 10:20 AM
 */
class CategorySeeder extends DatabaseSeeder{
    public function run(){
        DB::table('category')->insert(
            array(
                array('id'=>1, 'name'=>'ao'),
                array('id'=>2, 'name'=>'quan'),
                array('id'=>3, 'name'=>'phu-kien')
            )
        );
    }
}