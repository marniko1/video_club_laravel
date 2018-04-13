<!DOCTYPE html>
<html>
	<head>
		<title>Video club</title>
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				@yield('content')
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="{{ asset('js/bootstrap.js') }}"></script>
	</body>
</html>