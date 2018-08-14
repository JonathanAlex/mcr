
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

</head>
<body>
	<button id="modalBtn" class="btn">MODAL</button>
	<div id="myModal" class="modal">
	<div class="modalContent">
    	<div class="modalHeader">
        	<span id="close" class="close">&#9874;</span>
    	</div>
    	<div class="modalBody">
        	<div class="loginBox">
            	<img src="images/avatar.png" class="avatar">
            	<h1>Login Form</h1>
            	<form>
                	<p>Username</p>
                	<input type="text" name="username" placeholder="Ingrese Usuario">

                	<p>Password</p>
                	<input type="password" name="password" placeholder="Ingrese Contraseña">
                	<input type="submit" name="submit" value="Login">
                	<a href="#">Forgot Password</a>
            	</form>
        	</div>
    	</div>
	</div>
	</div>
	<script src="js/login.js"></script>
</body>
</html>
