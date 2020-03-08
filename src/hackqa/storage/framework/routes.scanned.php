<?php 

$router->get('/', [
	'uses' => 'App\Http\Controllers\QuestionController@listQuestionsAction',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->post('question/add', [
	'uses' => 'App\Http\Controllers\QuestionController@addQuestionAction',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('question/{questionId}', [
	'uses' => 'App\Http\Controllers\QuestionController@showQuestionAction',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->post('question/{questionId}/answer', [
	'uses' => 'App\Http\Controllers\AnswerController@addAnswer',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);
