<!DOCTYPE html>
<html>
<head>
	<title>App</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/app.css">
</head>
<body id='bootstrap-theme'>
	<nav class='navbar navbar-default navbar-static-top'>
		<div class='container'>
			<div class='navbar-header'>
				<button class='navbar-toggle' data-toggle='collapse' data-target='#navbar'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				
				<a href='/' class='navbar-brand'>My App</a>
			</div>

			<div id='navbar' class='collapse navbar-collapse'>
				<ul class='nav navbar-nav'>
					<li><a href='/tasks'>Tasks</a></li>
				</ul>

				<ul class='nav navbar-nav navbar-right'>
					@if(Auth::guest())
						<li><a href='/auth/login'>Login</a></li>
						<li><a href='/auth/register'>Register</a></li>
					@else
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown'>{{ Auth::user()->name }} <span class='caret'></span></a>

							<ul class='dropdown-menu'>
								<li><a href='/auth/logout'>Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>