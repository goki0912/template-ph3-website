<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $quiz = \App\Models\Quiz::first();

        $questions = [
            [
                'image' => 'src\public\img\quiz\img-quiz01.png',
                'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
                'supplement' => null,
            ],
            [
                'image' => 'src\public\img\quiz\img-quiz02.png',
                'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
                'supplement' => null,
            ],
            [
                'image' => 'src\public\img\quiz\img-quiz03.png',
                'text' => 'IoTとは何の略でしょう？',
                'supplement' => null,
            ],
        ];

        foreach ($questions as $question) {
            $quiz->questions()->create([
                'image' => $question['image'],
                'text' => $question['text'],
                'supplement' => $question['supplement'],
            ]);
        }
    }
}
