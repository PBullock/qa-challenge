<form action="/question/add" method="POST">
    <label for="question">Ask the question</label>
    <input name="question" id="question" placeholder="{{ $placeholder }}" value="{{ old('question', '') }}">
    @csrf
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger"> {{ $error }}</div>
        @endforeach
    @endif
</form>
