{{ $header }}

@foreach ($answers as $answer)
    @component('partials.questions.single', ['answer' => $answer])
    @endcomponent
@endforeach
