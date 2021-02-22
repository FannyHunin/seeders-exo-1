<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            [
                [
                    'name' => 'Fanny',
                    'age' => 23,
                    'phone' => '555-555-555',
                    'mail' => 'fanny@gmail.com'
                ],
                [
                    'name' => 'Hugo',
                    'age' => 24,
                    'phone' => '666-666-666',
                    'mail' => 'hugo@gmail.com'
                ],
                [
                    'name' => 'Albert',
                    'age' => 16,
                    'phone' => '777-777-777',
                    'mail' => 'cheken@gmail.com'
                ],
                [
                    'name' => 'Mars',
                    'age' => 69,
                    'phone' => '888-888-888',
                    'mail' => 'bluescreen@gmail.com'
                ],
            ]
        );
    }
}
