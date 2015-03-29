@extends('template.tempateTest')
@section('content')
	<div class="container">
	
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" id="menuId">
			<ul class="nav nav-pills">
				<li class="active"><a href="#">Главная</a></li>
				<li><a href="/home/posts">Все посты</a></li>
				<li><a href="#">Мои посты</a></li>
				<li><a href="/home/post">Добавить пост</a></li>
				</ul>
			</div>
			<div class="col-md-3">
			</div>

		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="img/blog.png" alt="...">
						<div class="caption">
							<h3>Следите <br/>за блогом</h3>
								<p>Вы можете просматривать все посты, узнавая информацию об их авторах</p>
								<p><a href="/home/posts" class="btn btn-primary" role="button">Продолжить</a></p>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="img/post.png" alt="...">
						<div class="caption">
							<h3>Добавляйте новые посты</h3>
								<p>Добавляйте любые посты на любую тему!</p>
								<p><a href="home/post" class="btn btn-primary" role="button">Продолжить</a></p>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="img/message.png" alt="...">
						<div class="caption">
							<h3>Оставляйте комментарии</h3>
								<p>Если Вас привлёк какой-либо пост, вы можете оставитm к нему комментарий</p>
								<p><a href="home/posts" class="btn btn-primary" role="button">Продолжить</a></p>
						</div>
				</div>
			</div>
	</div>
</div>

@stop
			
