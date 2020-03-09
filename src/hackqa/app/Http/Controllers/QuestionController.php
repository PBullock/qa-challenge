<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\AddQuestion;
use App\Question;
use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Collective\Annotations\Routing\Annotations\Annotations\Middleware;
use Collective\Annotations\Routing\Annotations\Annotations\Post;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    /**
     * List questions
     *
     * @Get("/")
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @Middleware("web")
     *
     */
    public function listQuestionsAction()
    {

        $questions = Question::all();
        $placeholder = ['who?', 'what?', 'why?', 'where?'];
        shuffle($placeholder);
        $data = [
            'questions' => $questions,
            'placeholder' => $placeholder[0]
        ];

        return view('main-question', $data);
    }

    /**
     * create question
     *
     * @Post("/question/add")
     *
     * @Middleware("web")
     *
     * @param \App\Http\Requests\AddQuestion $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addQuestionAction(AddQuestion $request)
    {
        $questionInput = $request->get('question');

        $question = new Question();
        $question->text = $questionInput;
        $question->save();

        return redirect('/');

    }


    /**
     * List answers for one question
     * @Get("/question/{questionId}")
     *
     * @Middleware("web")
     *
     * @param \Illuminate\Http\Request $request
     * @param                          $questionId
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showQuestionAction(Request $request, $questionId)
    {
        $question = Question::where('question_id', $questionId)->first();

        $answers = Answer::where('question_id', $questionId)->get();

        return view('main-answer', ['answers' => $answers, 'question' => $question ]);
    }
}
