<?php include('function.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration system </title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/login.css" />
</head>

<body >
<!-- Header -->
			<header id="header">
				<nav id="nav">
					<ul>
						<li><a href="homepage.php">Home</a></li>
					</ul>
				</nav>
			</header>


<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label><br><br>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label><br><br>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label><br><br>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label><br><br>
		<input type="password" name="password_2">
	</div>
	<div class="input-group"><br><br>
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>

</form>
    
</body>
</html>



















?>