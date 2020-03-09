{{ $header }}

@foreach ($questions as $question)
    <div class="card" style="width: 40%">
        <ul class="list-group list-group-flush">
            @component('partials.questions.single', ['question' => $question])
            @endcomponent
        </ul>
    </div>
@endforeach
