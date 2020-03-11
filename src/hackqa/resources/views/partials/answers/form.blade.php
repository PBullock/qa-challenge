<form action="/question/{{$question->question_id}}/answer" method="post">
    <div class="form-group">
        <label for="answer" class="font-weight-bold">The Answer is: </label>
        <textarea class="form-control" name="answer" id="answer" placeholder="my answer is..." value="{{ old('answer', '')  }}"></textarea>
        <button type="submit" class="btn btn-outline-dark mt-3">Post Answer</button>
    </div>
    @csrf
    @if ($errors->any())
        @foreach ( $errors->all() as $error )
            <div>{{ $error }}</div>
        @endforeach
    @endif
</form>
