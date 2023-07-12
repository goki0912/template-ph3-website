<!DOCTYPE html>
<html>

<head>
    <title>クイズ一覧</title>
    <link rel="stylesheet" href="{{asset('/css/delete.css')}}">
    <script src="{{asset('/js/delete.js')}}" defer></script>
</head>

<body>
    @if (session('message'))
    <div class="message">{{session('message')}}</div>
    @endif
    <h1>クイズ一覧</h1>
    @foreach ($quizzes as $quiz)
    <ul>
        <li>
            <a href="{{ route('quiz', ['id' => $quiz->id]) }}">{{ $quiz->name }}</a>
        </li>
        <form action="{{route('quiz.destroy',$quiz->id)}}" method="POST" data-quiz-id='{{$quiz->id}}'>
            @csrf
            @method('DELETE')
            <button type="button" class="delete-button">削除</button>
        </form>
    </ul>
    <div id="modal-{{$quiz->id}}" class="modal">
        <div class="modal-content">
            <h2>クイズ削除の確認</h2>
            <p>本当に削除しますか？</p>
            <div class="modal-buttons">
                <button class="modal-close">キャンセル</button>
                <button class="modal-confirm">削除</button>
            </div>
        </div>
    </div>
    @endforeach
</body>

</html>