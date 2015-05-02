<?php namespace App;

use App\NewMessage;

use Illuminate\Database\Eloquent\Model;

class NewMessage extends Model {

	protected $fillable = ['title', 'content'];

}
