
@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-6 offset-lg-3">
		<i class="fas fa-paw"></i>
		<h1>Vegan QnA</h1>
		<h4>Ask and get answers!</h4>
		
		<div class="mt-5">
			<a href="{{ url('questions')}}" class="btn btn-dark">View all questions here</a>
		</div>
	</div>
</div>
@endsection