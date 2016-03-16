<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PersonalDetail::create([
            'name'  =>  'Gopal Lal',
            'email' =>  'gopalkildoliya@gmail.caom',
            'phone' =>  '+91-9413017584',
            'birth_date'=>  '1992-07-15'
        ]);
    }
}
