<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Exceptions\Handler;
use Illuminate\Pagination\Paginator;



class Post extends Model {

	public static $unguarded = true;
	public static function getAll()
	{
		$posts=Post::orderBy('id','desc')->paginate(5);
		return $posts;
	}
	public static function get($id)
	{
		try{
			$post = Post::where('id', '=', $id )-> firstOrFail();
			return $post;
		}
		catch (Exception $e)
		{
			return $e;
		}
	}
	public static function add($data)
	{
		try
		{
			$post = Post::create([
			'title'=>$data['title'],
			'body'=>$data['body'],
			'author'=>'author'
			
			]);
		}
		catch (Exception $e)
		{
			return $e;
		}
		return $post;
		
	}
	
}
