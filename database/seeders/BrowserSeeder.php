<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Browser;

class BrowserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data=[
        array('nombre_browser'=>'Chrome','porcentaje_browser'=>61.4),
        array('nombre_browser'=>'IE Explorer','porcentaje_browser'=>11.8),
        array('nombre_browser'=>'Firefox','porcentaje_browser'=>10.9),
        array('nombre_browser'=>'Edge','porcentaje_browser'=>4.7),
        array('nombre_browser'=>'Safari','porcentaje_browser'=>4.2),
        array('nombre_browser'=>'Opera','porcentaje_browser'=>1.6),
        array('nombre_browser'=>'Opera GX','porcentaje_browser'=>1.7),



       ];

     Browser::insert($data);

    }
}
