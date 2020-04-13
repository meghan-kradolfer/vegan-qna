
@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-8 offset-lg-2">
		@include('partials/question-form')

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
					<p>No one has asked anything yet :(</p>
				</li>
			@endif
		</ul>
	</div>
</div>
@endsection