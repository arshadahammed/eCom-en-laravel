<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
          [

           'name'=>'redmi mobile',
            "prize"=>"200",
            "discription"=>"A smartphone with 8gb ram and much more feature",
            "category"=> "mobile",
            "gallery"=>"https://m.media-amazon.com/images/I/81B0HJigO-L._SL1500_.jpg", 

          ],

           [

           'name'=>'LG TV',
            "prize"=>"2000",
            "discription"=>"A smart tv with  much more feature",
            "category"=> "Tv",
            "gallery"=>"https://www.lg.com/in/images/tvs/md07522726/gallery/OLED48C1PTZ-D-01.jpg", 
                                 
           ],

           [

           'name'=>'panasonic tv',
            "prize"=>"3500",
            "discription"=>"A smart tv with  much more feature",
            "category"=> "Tv",
            "gallery"=>"https://www.lg.com/in/images/tvs/md07536076/gallery/43UM7790PTA-D-01.jpg", 
                                 
           ],


           [

           'name'=>'LG Fridge',
            "prize"=>"3200",
            "discription"=>"A fridge with 6gb ram and much more feature",
            "category"=> "fridge",
            "gallery"=>"https://www.lg.com/in/images/refrigerators/md07535790/gallery/GL-T502APZY-Refrigerators-Front-View-D-01.jpg", 
                                 
           ],



          


         ]);
        
    }
}
