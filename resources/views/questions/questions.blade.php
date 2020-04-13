
@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<form action="{{ url('questions/question') }}" method="POST">
			{{ csrf_field() }}

			<div class="row no-gutters">
				<div class="col-sm-8">
					<div class="form-group">
						<input type="text" name="question" id="question" class="form-control" placeholder="Do plants have feelings?">
					</div>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						<button type="submit" class="btn btn-info btn-block">Ask!</button>
					</div>
				</div>
			</div>
		</form>

		@if (Session::has('flash_message'))
		<div class="alert alert-success text-center">{!!Session::get('flash_message')!!}</div>
		@endif

		<hr/>

		<h2 class="my-4">Questions</h2>

		<ul class="list-group">
			@if (count($questions) > 0)
				@foreach ($questions as $question)
					<li class="list-group-item link">
						<a href="{{ url('questions/question/'.$question->id) }}">{{ $question->question }}</a>
					</li>
				@endforeach
			@else 
				<li class="list-group-item">
					No one has asked anything yet :(
				</li>
			@endif
		</ul>
</div>
@endsection