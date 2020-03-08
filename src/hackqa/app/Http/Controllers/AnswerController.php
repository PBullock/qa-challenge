<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Collective\Annotations\Routing\Annotations\Annotations\Post;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    /**
     * @Post("question/{questionId}/answer")
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addAnswer(Request $request, $questionId)
    {
        $question = Question::where('question_id', $questionId)->first();
        $answerInput = $request->get('answer');

        $answer = new Answer();
        $answer->text = $answerInput;
        $answer->question_id = $question->question_id;
        $answer->save();

        $question->answer_count = $question->answer_count+1;
        $question->save();

        return redirect()->action('QuestionController@showQuestionAction', ['questionId' => $questionId]);
    }
}
