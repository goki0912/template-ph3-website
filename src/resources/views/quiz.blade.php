<!DOCTYPE html>
<html>
<head>
    <title>{{ $quizzes->name }}</title>
</head>
<body>
    <h1>{{ $quizzes->name }}</h1>
    @foreach ($questions as $question)
        <h3>{{ $question->text }}</h3>
        <ul>
            @foreach ($question->choices as $choice)
                <li>{{ $choice->text }}
                @if ($choice->is_correct== 1)
                  <span>正解です</span>
                @else
                  <span>不正解です</span>
                @endif
              </li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
