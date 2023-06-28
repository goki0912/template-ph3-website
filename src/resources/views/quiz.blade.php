<!DOCTYPE html>
<html>
<head>
    <title>{{ $quizzes->name }}</title>
    <script>
        function showAnswer(element) {
            var answer = element.getAttribute('data-answer');
            var answerSpan = element.parentNode.querySelector('.answer');
            if (!answerSpan) {
                answerSpan = document.createElement('span');
                answerSpan.className = 'answer';
                element.parentNode.appendChild(answerSpan);
            }
            answerSpan.textContent = answer;
        }
    </script>
    <style>
        .answer {
            margin-left: 10px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>{{ $quizzes->name }}</h1>
    @foreach ($questions as $question)
        <h3>{{ $question->text }}</h3>
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
