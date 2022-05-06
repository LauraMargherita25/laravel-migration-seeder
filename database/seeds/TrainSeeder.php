<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // $arrTrains = [
        //     [
        //         'company' => 
        //         'departure_station' => 
        //         'arrival_station' => 
        //         'departure_time' => 
        //         'arrival_time' => 
        //         'train_ID' => 
        //         'carriages' => 
        //         'in_time' => 
        //         'deleted' => false
        //     ],
        // ];

        // $train = new Train();
        // $train->company = 'Italo';
        // $train->departure_station = 'Milano - Stazione Centrale';
        // $train->arrival_station = 'Roma - Tiburtina';
        // $train->departure_time = '2022-01-01 13:00:00';
        // $train->arrival_time = '2022-01-01 17:30:00';
        // $train->train_ID = 5394;
        // $train->carriages = 10;
        // $train->in_time = true;
        // $train->deleted = false;
        // $train->save();

        for ($i = 1; $i < 100 ; $i ++) { 
            $trainData = [
                'company'           => $faker->company(),
                'departure_station' => $faker->city(),
                'arrival_station'   => $faker->city(),
                'departure_time'    => $faker->dateTimeThisYear(),
                'arrival_time'      => $faker->dateTimeThisYear(),
                'train_ID'          => $faker->randomNumber(4, true),
                'carriages'         => $faker->randomNumber(2, true),
                'in_time'           => true,
                'deleted'           => false,
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
