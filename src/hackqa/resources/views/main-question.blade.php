@extends('partials.layout')

@section('content')
    <div>
        @component('partials.questions.form')
        @endcomponent
    </div>
    <div>
        @component('partials.questions.list', ['questions' => $questions])
            @slot('header')
                <h2>All the questions:</h2>
            @endslot
        @endcomponent
    </div>
@endsection
