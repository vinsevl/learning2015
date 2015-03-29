<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	//
	public static $unguarded = true;
	
	public static function add($data,$id)
	{
		try
		{
			$comment = Comment::create([
			'body'=>$data['body'],
			'author'=>'author',
			'post_id'=>$id,

			]);
		}
		catch (Exception $e)
		{
			return $e;
		}
		
		
	}

}
