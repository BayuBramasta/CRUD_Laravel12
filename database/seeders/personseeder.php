<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\person;

class personseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('person')->insert(
            [
                'firstname' => 'Budi',
                'lastname' => 'Widodo',
                'age'=>17,
                'address' =>'Semolowaru, Surabaya',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
