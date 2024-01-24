<?php

namespace Database\Seeders;
use App\Models\Food;

use Illuminate\Database\Seeder;

class FoodMenuSeeder extends Seeder
{
    private $fooddata = [
        ["id"=> 1, "name" => "Mexican Eggrolls", "img" => "assets/images/food1.jpg",
        "price" => 86.500, "desc" => "Sushi yang khas dari kami"],
        ["id"=> 2, "name" => "chicken burger", "img" => "assets/images/food2.jpg",
        "price" => 45.100, "desc" => "burger yang mempunyai ukuran jumbo"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::whereNotNull('id')->delete();
        foreach ($this->fooddata as $data) {
            Food::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'img' => $data["img"],
                'price' => $data["price"],
                'desc' => $data["desc"],
            ]);
        }
    }
}
