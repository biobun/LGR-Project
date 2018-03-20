<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
        	['id'=>str_random(5),'nama'=>str_random(12),'deskripsi'=>str_random(30),'harga'=>85000,'stok'=>0,'img1'=>'1.jpg','img2'=>'1.jpg','img3'=>'1.jpg','img4'=>'1.jpg'],
        	['id'=>str_random(5),'nama'=>str_random(12),'deskripsi'=>str_random(30),'harga'=>85000,'stok'=>0,'img1'=>'1.jpg','img2'=>'1.jpg','img3'=>'1.jpg','img4'=>'1.jpg'],
        	['id'=>str_random(5),'nama'=>str_random(12),'deskripsi'=>str_random(30),'harga'=>85000,'stok'=>0,'img1'=>'1.jpg','img2'=>'1.jpg','img3'=>'1.jpg','img4'=>'1.jpg'],
        	['id'=>str_random(5),'nama'=>str_random(12),'deskripsi'=>str_random(30),'harga'=>85000,'stok'=>0,'img1'=>'1.jpg','img2'=>'1.jpg','img3'=>'1.jpg','img4'=>'1.jpg'],
        	['id'=>str_random(5),'nama'=>str_random(12),'deskripsi'=>str_random(30),'harga'=>85000,'stok'=>0,'img1'=>'1.jpg','img2'=>'1.jpg','img3'=>'1.jpg','img4'=>'1.jpg'],
        ]);
    }
}
