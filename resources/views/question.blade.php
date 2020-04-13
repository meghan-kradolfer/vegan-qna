
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

		@include('partials/answer-form')
	</div>
</div>
@endsection