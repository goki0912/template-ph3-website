<!DOCTYPE html>
<html>
<head>
    <title>{{ $quiz->name }}</title>
    <script src="{{asset('/js/quiz.js')}}" defer></script>
    <style>
        .answer {
            margin-left: 10px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>{{ $quiz->name }}</h1>
    <a href="{{ route('quiz.edit', $quiz->id) }}">編集</a>
    @foreach ($quiz->questions as $question)
    <!-- 問題の表示 -->
    <h3>{{ $question->text }}</h3>
    <!-- 選択肢の表示 -->
    <ul>
        @foreach ($question->choices as $choice)
            <li>
                <a href="#" onclick="showAnswer(this)" data-answer="{{ $choice->is_correct ? '正解です' : '不正解です' }}">
                    {{ $choice->text }}
                </a>
            </li>
        @endforeach
    </ul>
@endforeach
</body>
</html>
