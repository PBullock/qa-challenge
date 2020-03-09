<h2>{{ $header }}</h2>
<div>
@foreach ($answers as $answer)
        <div class="card" style="width: 40%">
            <ul class="list-group list-group-flush">
                @component('partials.answers.single', ['answer' => $answer])
                @endcomponent
            </ul>
        </div>
@endforeach
</div>
