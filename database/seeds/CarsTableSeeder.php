<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $faker = (new \Faker\Factory())::create();
      $faker->addProvider(new \Faker\Provider\Fakecar($faker));

      for ($i = 0; $i < 3; $i++){
        $newCar = new Car();
        $newCar->targa = $faker->vehicleRegistration('[A-Z]{2}[0-9]{3}[A-Z]{2}');
        $newCar->modello = $faker->vehicleModel;
        $newCar->marca = $faker->vehicleBrand();
        $newCar->anno = $faker->year($max = 'now');
        $newCar->dettagli = $faker->text(150);
        $newCar->save();
      }
    }
}
