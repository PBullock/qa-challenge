<?php

namespace App\Http\Controllers;

use App\Answer;
use Collective\Annotations\Routing\Annotations\Annotations\Post;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    /**
     * @Post("question/{questionId}/answer")
     *
     * @param \Illuminate\Http\Request $request
     */
    public function addAnswer(Request $request, $questionId)
    {
        $answer = new Answer();


    }

}
