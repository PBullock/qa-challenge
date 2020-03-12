{{ $header }}
<div class="card" >
    <ul class="list-group list-group-flush">
@foreach ($questions as $question)
            @component('partials.questions.single', ['question' => $question, 'loop' => $loop])
            @endcomponent
@endforeach
    </ul>
</div>
