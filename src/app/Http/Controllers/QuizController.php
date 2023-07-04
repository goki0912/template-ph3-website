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
        $quiz = Quiz::with('questions')->findOrFail($id);
    
        return view('quiz', compact('quiz'));
    }
    }
