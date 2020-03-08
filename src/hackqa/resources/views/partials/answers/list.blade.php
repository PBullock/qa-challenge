<h2>{{ $header }}</h2>
<div>
@foreach ($answers as $answer)
    <div>
    @component('partials.answers.single', ['answer' => $answer])
    @endcomponent
    </div>
@endforeach
</div>
