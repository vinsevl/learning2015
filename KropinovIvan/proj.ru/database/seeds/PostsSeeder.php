<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class PostsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 
	 */
	 
	public function run()
	{
		$faker = Faker\factory::create();
		
		Post::truncate();
		
		for ($i = 0; $i < 20; $i++)
		{
		Post::create(
		[
			'title'=>$faker->sentence(2),
			'body'=>$faker->paragraph(20),	
			'author'=>$faker->name,
			'preview'=>$faker->imageUrl(200,200)	
		]
		);
		}
		
	}

}
