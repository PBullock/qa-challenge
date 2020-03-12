<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\AddAnswer;
use App\Question;
use Collective\Annotations\Routing\Annotations\Annotations\Middleware;
use Collective\Annotations\Routing\Annotations\Annotations\Post;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    /**
     * @Post("question/{questionId}/answer")
     *
     * @Middleware("web")
     *
     * @param \App\Http\Requests\AddAnswer $request
     *
     * @param                              $questionId
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addAnswer(AddAnswer $request, $questionId)
    {
        $answerInput = $request->get('answer');
        $question = Question::where('question_id', $questionId)->first();

        $qId = $question->question_id;

        $answer = new Answer();
        $answer->text = $answerInput;
        $answer->question_id = $qId;
        $answer->save();

        $question->answer_count = $question->answer_count + 1;
        $question->save();

        return redirect("question/$qId")->with(['questionId' => $questionId]);
    }
}
