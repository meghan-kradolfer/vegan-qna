
@extends('layouts.app')

@section('content')
    <div class="container">
		<div class="row">
			{{ $question->id }}. {{ $question->question }}
		</div>
    </div>
@endsection