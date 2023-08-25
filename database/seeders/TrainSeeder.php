<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $new_train = new Train();

        $new_train->id = $faker->ean8();

        $new_train->created_at = $faker->dateTime();

        $new_train->updated_at = $faker->dateTime();

        $new_train->azienda = $faker->company();

        $new_train->stazione_di_partenza = $faker->city();

        $new_train->orario_di_partenza = $faker->time();

        $new_train->orario_di_arrivo = $faker->time();

        $new_train->stazione_di_arrivo = $faker->city();

        $new_train->codice_treno = $faker->randomNumber(5, false);

        $new_train->numero_carrozze = $faker->randomDigitNotNull();

        $new_train->in_orario = $faker->boolean();

        $new_train->cancellato = $faker->boolean();



        $new_train->save();
    }
}
