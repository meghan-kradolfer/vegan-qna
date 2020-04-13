<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vegan QnA</title>

		<!-- Fonts -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel='stylesheet' type='text/css'>
		  
		<!-- Styles -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>

    <body>
		<div class="container">
			<div class="row my-5">
				<div class="col-sm-12 text-center">
					<i class="fas fa-paw"></i>
					<h1>Vegan Q&A</h1>
				</div>
			</div>

			@yield('content')
		</div>
    </body>
</html>