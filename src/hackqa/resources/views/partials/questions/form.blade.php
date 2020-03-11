<form action="/question/add" method="POST">
    <div class="form-group">
        <label for="question" class="font-weight-bold">Whats the question?</label>
        <textarea class="form-control" name="question" id="question" placeholder="{{ $placeholder }}" >{{ old('question', '') }}</textarea>
        <button type="submit" class="btn btn-outline-dark mt-3">Ask the question</button>
    </div>
    @csrf
    @if($errors->any())
        <div class="row">
            <div class="col-sm-12">
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
