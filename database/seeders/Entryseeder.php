<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Entryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert(

                        [


                            'username'=> "mesba",
                            'email'=> "mesba@gmail.com",
                            'password'=> "123456",
                            'role'=> "1",
                            'is_active'=> "1"




                        ]

                        );

    }


}
