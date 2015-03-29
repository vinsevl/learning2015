@extends('template.tempateTest')
@section('content')

@if(isset($post) && count($post))
	<div class="container">
		<div class="row">
			<div class=col-md-12 id="postBackg">
				<div>
			
					<h2>{{ $post->title }}</h2>
					<img src="{{ $post->preview }}" alt="" class="img-thumbnail" id="imgSize">
					<p> {{ $post->body }}</p>
					<p><a href="#">{{ $post->author }}</a></p>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class=col-md-2 >
			</div>
			<div class=col-md-8 >
			{!! Form::open() !!}
				<ul class="newPost">
					<li>{!! Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Текст комментария','autocomplete'=>'off']) !!}</li>
					<li>{!! Form::submit('Оставить комментарий',['class'=>'btn btn-primary btn-lg btn-block']) !!}</li>
				</ul>
			{!! Form::close() !!}
			
			</div>
			<div class=col-md-2 >
			</div>
			
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class=col-md-5 >
			</div>
			<div class=col-md-2 >
			<p><a class="btn btn-sm btn-success" href="/home/posts">
					Вернуться назад</a></a></p>
			</div>
			<div class=col-md-5 >
			</div>
			
		</div>
	</div>
@else
		<p>Нет такой записи!</p>
@endif


@stop