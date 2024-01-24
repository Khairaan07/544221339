<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    private $userdata = [
        ["id"=> 1, "name" => "Khalisa", "usertype" => "0", "email" => "Khalisa@gmail.com", "password" => "14122017"],
        ["id"=> 2, "name" => "Khaizuran", "usertype" => "0", "email" => "Khaizuran@gmail.com", "password" => "17052012"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::whereNotNull('id')->delete();
        foreach ($this->userdata as $data) {
            User::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'usertype' => $data["usertype"],
                'email' => $data["email"],
                'password' => $data["password"],
            ]);
        }
    }
}
