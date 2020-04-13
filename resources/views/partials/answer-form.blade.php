<form class="mt-4" method="POST" action="{{ url('questions/answer') }}">
	{{ csrf_field() }}
	<input type="hidden" name="question_id" class="form-control" placeholder="Name" value="{{ $question->id }}">

	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<textarea name="answer" class="form-control" placeholder="Add a new answer to this question">{{ old('answer') }}</textarea>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="form-group">
				<button class="btn btn-info btn-block">Answer!</button>
			</div>
		</div>
	</div>
</form>

@if (Session::has('flash_message'))
{!!Session::get('flash_message')!!}
@endif