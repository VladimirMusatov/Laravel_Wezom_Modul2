<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 6; $i++)
        {

        $status = rand(0, 1);
        $second = rand(10, 60);
        $hour = rand(10,23);
        $year = rand(1988, 2020);
        
        DB::table('posts')->insert([
            'name' => 'name' . $i,
            'email' => 'email'.$i.'@gmail.com',
            'text' => 'text'. $i,
            'status' => $status,
            'created_at' => $year.'-12-20 '.$hour.':54:'. $second,
            'updated_at' => $year.'-12-20 '.$hour.':54:'. $second,
            ]);
        } 
    }
}
