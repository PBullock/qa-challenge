<form action="/question/{{$question->question_id}}/answer" method="post">
    <label for="answer">The Answer is: </label>
    <input name="answer" id="answer" placeholder="my answer is..." value="{{ old('answer', '')  }}"/>
    @csrf
    @if ($errors->any())
        @foreach ( $errors->all() as $error )
            <div>{{ $error }}</div>
        @endforeach
    @endif
</form>
