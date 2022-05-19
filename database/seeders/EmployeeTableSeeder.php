<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $references = [
            [
                'name'	=> "dana",
                'email'	=> "dana@gmail.com",
                'address' => 'jalan sunan kudus',
                'phone_number'	=> '082325661600'
            ],
            [
                'name'	=> "padli",
                'email'	=> "padli@gmail.com",
                'address' => 'jalan garuda',
                'phone_number'	=> '082243971724'
            ]
        ];

        \DB::table('employee')->insert($references);
    }
}
