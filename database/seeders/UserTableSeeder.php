<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                "name" => "Marco",
                "surname" =>"Rossi",
                "email" =>"ulysses200915@varen8.com",
                "role" =>"user",
                "password"=> Hash::make("Edusogno123")
            ],
            [
                "name" => "Filippo",
                "surname" =>"D’Amelio",
                "email" =>"qmonkey14@falixiao.com",
                "role" =>"user",
                "password"=> Hash::make("Edusogno?123")
            ],
            [
                "name" => "Gian Luca",
                "surname" =>"Carta",
                "email" =>"mavbafpcmq@hitbase.net",
                "role" =>"user",
                "password"=> Hash::make("EdusognoCiao")
            ],
            [
                "name" => "Stella",
                "surname" =>"De Grandis",
                "email" =>"dgipolga@edume.me",
                "role" =>"user",
                "password"=> Hash::make("EdusognoGia") 
            ],
            [
                "name" => "Valeria",
                "surname" =>"Caramellino",
                "email" =>"vale@gmail.com",
                "role" =>"admin",
                "password"=> Hash::make("Valeria1") 
            ],
        ];

        foreach ($users as $item) {
            User::create($item);
        }
    }
}
