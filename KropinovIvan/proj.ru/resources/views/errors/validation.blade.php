@extends('template.tempateTest')

@section('content')
	@if (isset ($messages))
	
	<div class="container">
		<div class="row">
			<div class=col-md-2 >
			</div>
			<div class=col-md-8 >
				<div class="alert alert-danger">
					@foreach ($messages as $message)
		
					<strong>{{ $message[0]}}<br/></strong>
		
					@endforeach
				</div>
			</div>
		<div class=col-md-2 >
			</div>
		</div>
	</div>
	@else
	
	@endif
			<div class=col-md-5 >
			</div>
			
				<div class=col-md-2 >
					<a class="btn btn-sm btn-success" href="{{ URL::previous() }}"><p>
					Вернуться назад</p></a>
				</div>
			<div class=col-md-5 >
			</div>
@stop