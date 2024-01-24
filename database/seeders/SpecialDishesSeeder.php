<?php

namespace Database\Seeders;
use App\Models\Specialdishes;

use Illuminate\Database\Seeder;

class SpecialDishesSeeder extends Seeder
{
    private $spdishesdata = [
        ["id"=> 1, "namepart1" => "Garlic", "namepart2" => "green beans", "img" => "assets/images/deshes1.png", "desc" => "Menu yang sering di pesan", "price" => 120.000],
        ["id"=> 2, "namepart1" => "Ayam", "namepart2" => "mentega", "img" => "assets/images/deshes2.png", "desc" => "Menu yang paling favorite untuk keluarga", "price" => 100.000],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialdishes::whereNotNull('id')->delete();
        foreach ($this->spdishesdata as $data) {
            Specialdishes::create([
                'id' => $data["id"],
                'namepart1' => $data["namepart1"],
                'namepart2' => $data["namepart2"],
                'img' => $data["img"],
                'desc' => $data["desc"],
                'price' => $data["price"],
            ]);
        }
    }
}
