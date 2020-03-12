@extends('partials.layout')

@section('content')
    <div>
        @component('partials.questions.form', ['placeholder' => $placeholder ])
        @endcomponent
    </div>
    <div>
        @component('partials.questions.list', ['questions' => $questions])
            @slot('header')
                <h2 class="h3">All the questions:</h2>
            @endslot
        @endcomponent
    </div>
@endsection
