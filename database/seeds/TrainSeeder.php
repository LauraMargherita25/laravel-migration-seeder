<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->company = 'Italo';
        $train->departure_station = 'Milano - Stazione Centrale';
        $train->arrival_station = 'Roma - Tiburtina';
        $train->departure_time = '2022-01-01 13:00:00';
        $train->arrival_time = '2022-01-01 17:30:00';
        $train->train_ID = 5394;
        $train->carriages = 10;
        $train->in_time = true;
        $train->deleted = false;
        $train->save();
    }
}
