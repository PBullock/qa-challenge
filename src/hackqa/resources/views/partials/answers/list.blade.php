{{ $header  }}
<div>
    <div class="card" >
        <ul class="list-group list-group-flush">
            @foreach ($answers as $answer)
                @component('partials.answers.single', ['answer' => $answer, 'loop' => $loop])
                @endcomponent
            @endforeach
        </ul>
    </div>
</div>
