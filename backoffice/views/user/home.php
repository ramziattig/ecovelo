<?php
session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header('location:profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="../../assets/css/sigin.css">
<title>register</title>
</head>
<body>
<div class="container" id="container">
<div class="form-container sign-up-container">

<form method="POST" action="../../controllers/userController.php?event=register">
<?php if (isset($_GET['register']) && !empty($_GET['register']) && $_GET['register'] == 'true') { ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success">You are registred successfulllllyyy ! </div>
                        </div>
                    </div>
	<?php } ?>
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
		<a href="#" class="social"><i class="fab fa-google"></i></a>
		<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" name="fullname" placeholder="Name" class="form-control">
	<input type="email" name="email" placeholder="Email" class="form-control">
	<input type="password" name="password" placeholder="Password" class="form-control">
	<button class="btn-signUp">SignUp</button> 
	
</form>
</div>
<div class="form-container sign-in-container">
	<form class="form" method="POST" action="../../controllers/userController.php?event=login">

	
	<?php if (isset($_GET['error']) && !empty($_GET['error']) && $_GET['error'] == 'true') { ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-danger">Email or/and password incorrect(s) ! </div>
                        </div>
                    </div>
    <?php } ?>
		<h1>Sigin In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
		<a href="#" class="social"><i class="fab fa-google"></i></a>
		<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Email" class="form-control">
	<input type="password" name="password" placeholder="Password" class="form-control">
	<a href="#">Forgot Your Password</a>

	<button class="btn-sigIn">Sigin In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
			<div class="home">
					<a href="../../index.php"><button class="btn">home</button></a>
			</div>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
		
	</div>
</div>

</div>
<script src="../../assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>