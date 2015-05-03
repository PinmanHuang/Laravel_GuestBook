<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NewMessage;

use Illuminate\Http\Request;

class NewMessageController extends Controller {

	public function __construct() {
		$this -> middleware('auth');
	}

	public function store(Request $request) {
		//有輸入資料
		//if (Request::has('title')) {
			$title = $request -> get('title');
			$content = $request -> get('content');
			NewMessage::create(['title' => $title, 'content' => $content]);
			return redirect('index');
		//}
	}

	public function stored(Request $request) {
		//return "123";
		$title = $request -> get('title');
		$content = $request -> get('content');
		$post = NewMessage::create(['title' => $title, 'content' => $content]);
		return Response() -> json(['allMessage' => $post]);
	}

}
