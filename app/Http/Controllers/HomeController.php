<?php namespace App\Http\Controllers;
use App\Message;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * 
	 */
	public function __construct()
	{
		//檢查有無登入
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * 
	 */
	public function index()
	{
		$messages = Message::orderBy('id', 'DESC')->get();
		return view('home')-> with('messages', $messages);
	}

}
