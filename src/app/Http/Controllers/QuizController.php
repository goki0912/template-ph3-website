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
    public function update(Request $request,$id)
    {
        $quiz=Quiz::findOrFail($id);
        $quiz->name=$request->input('title');
        $quiz->save();

        return redirect()->route('quizzes')->with('message','更新されました！');
    }
    // QuizController.php

public function edit($id)
{
    $quiz = Quiz::findOrFail($id);

    return view('edit', compact('quiz'));
}
public function destroy($id)
{
    $quiz=Quiz::findOrFail($id);

    //物理削除の場合
    $quiz->delete();

    //論理削除の場合
    //$quiz->forceDelete();
    
    return redirect()->route('quizzes')->with('message','削除しました');
}

    }
