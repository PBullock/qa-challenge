<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Collective\Annotations\Routing\Annotations\Annotations\Post;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * List questions
     *
     * @Get("/")
     */
    public function listQuestionsAction()
    {

        $questions = Question::all();

        return view('main-question', ['questions' => $questions]);
    }

    /**
     * create question
     *
     * @Post("/question/add")
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addQuestionAction(Request $request)
    {
        $questionInput = $request->get('question');
        $question = new Question();
        $question->text = $questionInput;
        $question->save();


        return redirect()->action('QuestionController@listQuestionsAction');

    }


    /**
     * List answers for one question
     * @Get("/question/{questionId}")
     *
     * @param \Illuminate\Http\Request $request
     * @param                          $questionId
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showQuestionAction(Request $request, $questionId)
    {
        $question = Question::where('question_id', $questionId)->first();

        $answers = Answer::all();

        return view('main-answer', ['answers' => $answers, 'question' => $question ]);
    }
}
