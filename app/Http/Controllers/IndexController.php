<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NewMessage;

use Illuminate\Http\Request;

class IndexController extends Controller {

	public function __construct() {
		$this -> middleware('auth');
	}

	public function index() {
		$allMessage = NewMessage::orderBy('id', 'DESC') -> get();
		return view('index') -> with('allMessage', $allMessage);
	}

}
