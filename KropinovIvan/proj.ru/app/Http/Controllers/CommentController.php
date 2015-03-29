<?php namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Database\Eloquent\Model;
use Request;
use Validator;
use Redirect;

use App\Exceptions\Handler;


class CommentController extends Controller {

	
	
	public function addComment($id)
	
	{
			$id = (int)$id;
			$data = Request::all();
			$rules = 
			[
				'body' => 'required|min:10',
			];
			
			$val = Validator::make($data, $rules);
			if ($val->fails())
			{
				return view('errors.validation')->with('messages',$val->messages()->toArray());
			}
			
			$post = Comment::add($data, $id);
			return Redirect::to('/home/posts');
			
		
	
	}

}
