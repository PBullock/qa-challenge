<li class="list-group-item d-flex justify-content-between">
    <a href="/question/{{$question->question_id}}" class="">{{ $question->text }}</a>
    <div>
        <span class="badge badge-pill badge-primary">{{ $question->answer_count }} answers</span>
    </div>
</li>
