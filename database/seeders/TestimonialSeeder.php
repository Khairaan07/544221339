<?php

namespace Database\Seeders;
use App\Models\Testimonial;

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    private $testimonialdata = [
        ["id"=> 1, "name" => "Khairaan", "bio" => "Pelanggan1", "img" => "assets/images/gambar1.jpeg", "review" => "Makanan nya lumayan tapi sedikit asin untuk burgernya.", "rating" => "4.5"],
        ["id"=> 2, "name" => "Khaizuran", "bio" => "Pelanggan2", "img" => "assets/images/gambar2.jpeg", "review" => "Sangat enak sekali nasi goreng ikan asinnya.", "rating" => "3.5"],
        ["id"=> 3, "name" => "Khalisha", "bio" => "Pelanggan3", "img" => "assets/images/gambar3.jpeg", "review" => "Sushinya mantap sekali dan rasanya melebihi restaurant lain.", "rating" => "4.5"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::whereNotNull('id')->delete();
        foreach ($this->testimonialdata as $data) {
            Testimonial::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'bio' => $data["bio"],
                'review' => $data["review"],
                'rating' => $data["rating"],
                'img' => $data["img"],
            ]);
        }
    }
}
