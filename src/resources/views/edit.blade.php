<form action="{{route('quiz.update',$quiz->id)}}" method="POST">
  @csrf
  @method('PUT')
  <label for="name">タイトル</label>
  <input type="text" name="title" value="{{$quiz->name}}">
  <button type="submit">更新</button>
</form>