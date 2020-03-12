<li class="list-group-item d-flex justify-content-between bg-{{ $loop->index % 2 ? 'light' : 'white'  }} ">
    <a href="/question/{{$question->question_id}}" class="">{{ $question->text }}</a>
    <div>
        <span class="badge badge-pill badge-{{ $question->answer_count == 0 ? 'danger' : 'primary' }}">{{ $question->answer_count }} answers</span>
    </div>
</li>
