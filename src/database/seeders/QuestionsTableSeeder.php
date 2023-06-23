<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class QuestionsTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('questions')->insert([
      [
        'id' => 1,
        'quiz_id' => 1,
        'image' => 'src\public\img\quiz\img-quiz01.png',
        'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
        'supplement' => null,
      ],
      [
        'id' => 2,
        'quiz_id' => 1,
        'image' => 'src\public\img\quiz\img-quiz02.png',
        'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
        'supplement' => null,

      ],
      [
        'id' => 3,
        'quiz_id' => 1,
        'image' => 'src\public\img\quiz\img-quiz03.png',
        'text' => 'IoTとは何の略でしょう？',
        'supplement' => null,
      ],
      [
        'id' => 4,
        'quiz_id' => 2,
        'image' => 'src\public\img\quiz\img-quiz04.png',
        'text' => '出身地はどこでしょう？',
        'supplement' => null,
      ],
      [
        'id' => 5,
        'quiz_id' => 2,
        'image' => 'src\public\img\quiz\img-quiz05.png',
        'text' => '在籍中の大学はどこでしょう？',
        'supplement' => null,
      ],
      [
        'id' => 6,
        'quiz_id' => 2,
        'image' => 'src\public\img\quiz\img-quiz06.png',
        'text' =>  '動物に例えるとなんと言われることが多いでしょう？',
        'supplement' => null,
      ],
    ]);

    // foreach ($questions as $question) {
    //   $quiz->questions()->create([
    //     'image' => $question['image'],
    //     'text' => $question['text'],
    //     'supplement' => $question['supplement'],
    //   ]);
    // }
  }
}
