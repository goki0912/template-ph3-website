<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;


class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();

        return view('quizzes',
        ['quizzes' => $quizzes]);
    }
    public function show($id)
    {
        $quizzes= Quiz::findOrFail($id);
        $questions = Question::where('quiz_id', $id)->get();

        return view('quiz', compact('quizzes', 'questions'));
    }
}
