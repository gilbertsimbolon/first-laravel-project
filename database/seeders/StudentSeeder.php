<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'nisn' => $faker->ean8,
                'name' => $faker->name,
                'class' => $faker->randomElement(['A', 'B', 'C']),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'gender' => $faker->randomElement(['Pria', 'Wanita']),
                'place_born' => $faker->city,
                'date_born' => $faker->date,
                'address' => $faker->address,
                'foto' => $faker->image,
            ]);
        }
    }
}
