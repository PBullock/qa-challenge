<form action="/question/{{$question->question_id}}/answer" method="post">
    <div class="form-group">
        <label for="answer" class="font-weight-bold">The Answer is: </label>
        <textarea class="form-control" name="answer" id="answer" placeholder="my answer is..." >{{ old('answer', '')  }}</textarea>
        <button type="submit" class="btn btn-outline-dark mt-3">Post Answer</button>
    </div>
    @csrf
    @if ($errors->any())
        @foreach ( $errors->all() as $error )
            <div class="alert alert-danger alert-dismissible fade show" role="alert"> {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
</form>
