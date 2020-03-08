<?php

namespace App\Http\Controllers;

use Collective\Annotations\Routing\Annotations\Annotations\Get;
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
        return view('welcome');
    }
}
