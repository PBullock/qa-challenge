@extends('partials.layout')

@section('content')
    @component('partials.answers.form', ['question' => $question])
    @endcomponent

    @component('partials.answers.list', ['answers' => $answers])
        @slot('header')
            <h2 class="h3">All the answers:</h2>
        @endslot
    @endcomponent
@endsection
