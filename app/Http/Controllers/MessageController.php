<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller {

	public function __construct() {                                 
	    $this -> middleware('auth');
	}

	public function store(Request $request) {                                                                                                     
	    $title = $request->get('title');                                                                                                         
	    $content = $request->get('content');                                                                                                     
	    Message::create(['title'=>$title, 'content'=>$content]);                                                                                 
	    return redirect('home');                                                                                                                    
	} 

}
