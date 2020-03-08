{{ $header }}

@foreach ($questions as $question)
    @component('partials.questions.single', ['question' => $question])
    @endcomponent
@endforeach
