
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
		{!!Session::get('flash_message')!!}
		@endif

		<hr/>

		<h2 class="my-4">Questions</h2>

		<ul class="list-group">
			@if (count($questions) > 0)
				@foreach ($questions as $question)
					<li class="list-group-item link">
						<a href="{{ url('question/'.$question->id) }}">
							<span class="question">{{ $question->question }}</span>

							@if (count($question->answer_count) > 0)
								<small class="answers">
									{{ $question->answer_count[0]->total }} 
									@if ($question->answer_count[0]->total > 1)
									answers
									@else
									answer
									@endif
								</small>
							@endif
						</a>
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