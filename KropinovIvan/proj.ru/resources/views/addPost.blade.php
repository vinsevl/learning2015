@extends('template.tempateTest')
@section('content')
	<div class="container">
	
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" id="menuId">
			<ul class="nav nav-pills">
				<li><a href="/home">Главная</a></li>
				<li><a href="/home/posts">Все посты</a></li>
				<li><a href="#">Мои посты</a></li>
				<li class="active"><a href="/home/post">Добавить пост</a></li>
				</ul>
			</div>
			<div class="col-md-3">
			</div>

		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class=col-md-2>
				</div>
				<div class=col-md-8>
		
			{!! Form::open() !!}
				<ul class="newPost">
					<li>{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Заголовок статьи','autocomplete'=>'off']) !!}</li>
					<li>{!! Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Текст статьи','autocomplete'=>'off']) !!}</li>
					<li>{!! Form::submit('Добавить',['class'=>'btn btn-primary btn-lg btn-block']) !!}</li>
				</ul>
			{!! Form::close() !!}
				</div>
				<div class=col-md-2>
				</div>
			</div>
		</div>
		


@stop
			
