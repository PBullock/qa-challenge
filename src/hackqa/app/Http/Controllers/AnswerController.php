<?php

namespace App\Http\Controllers;

use App\Answer;
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addAnswer(Request $request, $questionId)
    {
        $validated = $request->validate([
            'answer' => 'required|min:2'
        ]);

        $answerInput = $request->get('answer');
        $question = Question::where('question_id', $questionId)->first();

        $qId = $question->question_id;

        $answer = new Answer();
        $answer->text = $answerInput;
        $answer->question_id = $qId;
        $answer->save();

        $question->answer_count = $question->answer_count+1;
        $question->save();

        return redirect("question/$qId")->with(['questionId' => $questionId]);
    }
}
