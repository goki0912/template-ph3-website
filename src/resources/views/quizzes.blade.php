<!DOCTYPE html>
<html>
<head>
    <title>クイズ一覧</title>
</head>
<body>
    <h1>クイズ一覧</h1>
    <ul>
        @foreach ($quizzes as $quiz)
        <li>
          <a href="{{ route('quiz', ['id' => $quiz->id]) }}">{{ $quiz->name }}</a>
      </li>
              @endforeach
    </ul>
</body>
</html>
