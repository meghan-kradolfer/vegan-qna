<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Vegan Q&A</title>
		
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

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
					<a href="/"><i class="fas fa-paw"></i></a>
					<h1>Vegan Q&A</h1>
				</div>
			</div>

			@yield('content')
		</div>
    </body>
</html>