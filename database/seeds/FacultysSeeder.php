<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Faculty;

class FacultysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * $user = User::create([
            'first_name' => 'Taylor',
            'last_name' => 'Otwell',
            'title' => 'Developer',
        ]);

            $flight = new Flight;
            $flight->name = $request->name;
            $flight->save();
         * */

        for ($i = 0; $i <= 20; $i++) {
            $data = [
                'title' => Str::random(15),
                'description' => Str::random(30)
            ];
            Faculty::create($data);
        }
    }
}
