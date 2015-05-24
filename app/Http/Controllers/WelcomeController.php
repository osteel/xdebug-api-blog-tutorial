<?php namespace App\Http\Controllers;

use Illuminate\Http\Response as HttpResponse;
use Input;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	/**
	 * Simple example method for GET requests
	 *
	 * curl http://xdebug-api.local/get
	 *
	 * @return Response
	 */
	public function get()
	{
		$pizzas = [
			"Calzone",
			"Four Seasons",
			"Quattro Formaggi",
			"Margherita",
			"Queen"
		];

		return response()->json($pizzas);
	}

	/**
	 * Simple example method for POST requests
	 *
	 * curl -X POST -H "Content-Type: application/json" -d '{"name":"Pepperoni"}' http://xdebug-api.local/post
	 *
	 * @return Response
	 */
	public function post()
	{
    	$name = Input::get('name');

		return response()->json(['message' => 'The Pizza was correctly created'], HttpResponse::HTTP_CREATED);
	}

}
