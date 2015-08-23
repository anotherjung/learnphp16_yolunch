<!DOCTYPE html>
<head>
	<title> Hungry? </title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

	<script>


		$(document).ready(function() {
		$(document).on("click", "#login", function() {
			//$.post($(this).attr('action'), $(this).serialize(), function(res) {
				$('.container').html('<div class="login"><form class="form-signin" action="/main/login" method="post"><input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus><input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required><input type="submit" class="btn btn-lg btn-primary btn-block" id="login2" value="Login"></form></div>');
			return false;
			});

		$(document).on("click", "#register", function() {
			//$.post($(this).attr('action'), $(this).serialize(), function(res) {
				$('.container').html('<div class="register"><form class="form-signin" action="/main/register" method="post"><input type="text" name="firstname" class="form-control" placeholder="First Name" autofocus><input type="text" name="lastname" class="form-control" placeholder="Last Name"><input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required><input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required><input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" required><input type="text" name="cohort" placeholder="yyyy-mm-dd"><input type="submit" class="btn btn-lg btn-primary btn-block" id="login2" value="Register"></form></div>');
			return false;
			});

		$(document).on("submit", "form", function() {
			$.post($(this).attr('action'), $(this).serialize(), function(res) {
				$('.container').html("");
				 $('.user').html(res);
				
		});
			return false;
		});
			
		//});

		// $(document).on("change", ".byDate", function() {
		// 	$.post($(this).attr('action'), $(this).serialize(), function(res) {
		// 		//alert(res);
		// 		 $('#print').html(res);
		// 	});
		// 	return false;
		// })
	});


	</script>
</head>


<body>
	<div class="first">
		<h1> Are you hungry? </h1>
		
		<button id="login"> Login </button>
		<button id="register"> Register </button>

	</div>

	<div class="container"></div>
	
	<div class="user">
	
	</div>

</ul>
</body>
</html>