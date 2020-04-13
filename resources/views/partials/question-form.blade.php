<form action="{{ url('questions/question') }}" method="POST">
	{{ csrf_field() }}

	<div class="row no-gutters">
		<div class="col-sm-8">
			<div class="form-group">
				<input type="text" value="{{ old('question') }}" name="question" id="question" class="form-control" placeholder="Do plants have feelings?">
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