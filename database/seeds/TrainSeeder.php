<?php

use App\Train;
use App\Wagon;
use App\Chair;
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
      Train::truncate();
      Wagon::truncate();
      Chair::truncate();
      $faker = Faker\Factory::create();

      for ($i=0; $i < 2 ; $i++) {
        $train = Train::create([
          'train_name' => 'Kereta '.$faker->firstName,
          'station_id' => 1
        ]);
        for ($j=0; $j < 8; $j++) {
          $wagon = Wagon::create([
            'wagon_type' => 'Economy',
            'train_id' => $train->id,
            'price' => rand(100000, 500000)
          ]);
          for ($k=1; $k < 52 ; $k++) {
            foreach(range('A', 'D') as $key){
              $chair = Chair::create([
                'wagon_id' => $wagon->id,
                'chair_number' => $key.$k
              ]);
            }
          }
        }
      }
    }
}
