<?php namespace App\Http\Controllers;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use Request;
use Validator;
use Redirect;

use App\Exceptions\Handler;


class PostController extends Controller {

	
	public function allPosts()
	
	{
				$posts = Post::getAll();
				return view('allPosts')->with('posts',$posts);
		
	}
	public function getPost($id)
	
	{
		$id = (int)$id;
		$post = Post::get($id);
		if ($post instanceof Exception)
			{return 'error';}
		else
			{return view('showPost')->with('post',$post);}
		
	}
	public function viewPost()
	{
		return view('addPost');
	}
	
	
	public function addPost()
	
	{
			$data = Request::all();
			$rules = 
			[
				'title' => 'required|min:8',
				'body' => 'required|min:10'
			];
			
			$val = Validator::make($data, $rules);
			if ($val->fails())
			{
				
				return view('errors.validation')->with('messages',$val->messages()->toArray());
			}
			
			$post = Post::add($data);
			return Redirect::to('/home');
			
		
	
	}

}
