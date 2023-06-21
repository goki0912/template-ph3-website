<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Choice;

class ChoicesTableSeeder extends Seeder
{
    public function run()
    {
        $questions = \App\Models\Question::all();

        $choices = [
            [
                ['text' => '約79万人', 'is_correct' => false],
                ['text' => '約28万人', 'is_correct' => false],
                ['text' => '約183万人', 'is_correct' => true],
            ],
            [
                ['text' => 'INTECH', 'is_correct' => false],
                ['text' => 'BIZZTECH', 'is_correct' => false],
                ['text' => 'X-TECH', 'is_correct' => true],
            ],
            [
                ['text' => 'Internet of Things', 'is_correct' => true],
                ['text' => 'Information on Tool', 'is_correct' => false],
                ['text' => 'Integrate into Technology', 'is_correct' => false],
            ],
        ];

        foreach ($questions as $index => $question) {
            foreach ($choices[$index] as $choice) {
                $question->choices()->create([
                    'text' => $choice['text'],
                    'is_correct' => $choice['is_correct'],
                ]);
            }
        }
    }
}