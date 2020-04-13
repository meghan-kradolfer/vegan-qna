
@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<h2>Question: <i>{{ $question->question }}</i></h2>

		<ul class="list-group my-4">
			@if (count($answers) > 0)
				@foreach ($answers as $answer)
				<li class="list-group-item">
					<p>{{ $answer->answer }}</p>
				</li>
				@endforeach
			@else 
				<li class="list-group-item">
					<p>This question needs answers!</p>
				</li>
			@endif
		</ul>

		<hr />

		<h5 class="my-4">Answer this question</h5>

		@if (Session::has('flash_message'))
			<div class="alert alert-success">{!!Session::get('flash_message')!!}</div>
		@endif

		<form method="POST" action="{{ url('questions/answer') }}">
			{{ csrf_field() }}
			<input type="hidden" name="question_id" class="form-control" placeholder="Name" value="{{ $question->id }}">

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<textarea name="answer" class="form-control" placeholder="Make it good"></textarea>
						
						@if ($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
						<button class="btn btn-info btn-block">Answer!</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection