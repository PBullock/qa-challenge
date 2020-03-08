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
     *  @Get("/")
     *
     */
    public function listQuestionsAction()
    {

        $questions = Question::all();

        return view('main-question', ['questions' => $questions]);
    }

    /**
     * create question
     * @Post("/question/add")
     *
     * @param \Illuminate\Http\Request $request
     */
    public function addQuestionAction(Request $request)
    {
        $question = new Question();
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
        $answers = Answer::all();

        return view('main-answer', ['answers' => $answers ]);
    }
}
