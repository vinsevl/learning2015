@extends('template.tempateTest')
@section('content')
	<div class="container">
	
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" id="menuId">
			<ul class="nav nav-pills">
				<li><a href="/home">Главная</a></li>
				<li class="active"><a href="/home/posts">Все посты</a></li>
				<li><a href="#">Мои посты</a></li>
				<li><a href="/home/post">Добавить пост</a></li>
				</ul>
			</div>
			<div class="col-md-3">
			</div>

		</div>
	</div>
		

@if(isset($posts) && count($posts))
	@foreach($posts as $post)
	<div class="container">
		<div class="row">
			<div class=col-md-12 id="postBackg">
				<section style="clear:both">
					<a href="/home/post/{{$post->id}}"><h3>{{ $post->title}}</h3></a>
					<img src="{{ $post->preview}}" alt="" class="img-thumbnail" id="imgSize"/>
					<p>{{ $post->body}}</p>
					<p><a href="#">{{ $post->author}}</a></p>
				</section>
			</div>
		</div>
	</div>
	
	@endforeach
	<div class="container">
		<div class="row">

			<div class=col-md-4>
			</div>
			<div class=col-md-4>
			<?php
				echo $posts->render();
			?>
			</div>
			<div class=col-md-4>
			</div>
		</div>
	</div>

@else
	<p>Нет записей!</p>
@endif


@stop
			
