<form action="/question/add" method="POST">
    <label for="question">Ask the question</label>
    <input name="question" id="question" placeholder="{{ $placeholder }}" value="{{ old('question', '') }}">
    @csrf
    @if($errors->any())
        <div class="row">
            <div class="col-sm-12 col-md-6">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"> {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</form>
