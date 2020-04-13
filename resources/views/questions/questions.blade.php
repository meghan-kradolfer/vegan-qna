
@extends('layouts.app')

@section('content')
    <div class="container">
		<div class="row">
			@if (Session::has('flash_message'))
			<div class="col-lg-6 offset-lg-3">
				<div class="alert alert-success">{!!Session::get('flash_message')!!}</div>
			</div>
			@endif

			<div class="col-lg-6 offset-lg-3">
				<h2>Questions</h2>

				@if (count($questions) > 0)
					<ul class="list-group">
						@foreach ($questions as $question)
						<li class="list-group-item">{{ $question->question }}</div>
						@endforeach
					</ul>
				@else 
					<p><i>No questions available</i></p>
				@endif
		</div>
    </div>
@endsection