<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class QuizzesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'id' => 1,
                'name' => 'ITクイズ',
            ],
            [
                'id' => 2,
                'name' => 'Aさんクイズ',
            ],

        ]);
    }
}
