<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                "title" => "Test Edusogno 1",
                "start_event" => "2022-10-13 14:00"
            ],
            [
                "title" => "Test Edusogno 2",
                "start_event" => "2022-10-15 19:00"
            ],
            [
                "title" => "Test Edusogno 3",
                "start_event" => "2022-11-15 16:00"
            ],
        ];

        foreach($events as $item){
            Event::create($item);
        }
    }
}
