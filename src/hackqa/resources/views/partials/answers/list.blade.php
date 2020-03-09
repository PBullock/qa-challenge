<h2>{{ $header }}</h2>
<div>
@foreach ($answers as $answer)
    <div class="col-sm-12">
    @component('partials.answers.single', ['answer' => $answer])
    @endcomponent
    </div>
@endforeach
</div>
