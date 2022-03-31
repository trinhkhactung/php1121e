<?php

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 20; $i++) {
            $data = [
                'name' => Str::random(10),
                'facultys_id' => Faculty::all()->random()->id,
                'email' => Str::random(8).'@gmail.com',
                'phone' => rand(1000000000,9999999999),
                'addres' => Str::random(20),
                'married' => 1,
                'work' => Str::random(10),
                'descriptions' => Str::random(100),
            ];

            Student::firstOrCreate($data);
        }
    }
}
