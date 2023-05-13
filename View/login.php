<!doctype html>
<html lang="en"> 
	<head> 	
		<meta charset="UTF-8">
		<link rel="Stylesheet" href="View/css/index.css">
        <link rel="Stylesheet" href="/View/css/style.css">
		<script defer src="./script.js"></script>
		<title>Login</title>
	</head>
	 
	<body>
		<main class="login">
			<div class="login_conteiner">
				<h1 class="login_title">Login</h1>
					<form class="login_form" action="/user/login">
						<input type="hidden" name="type" value="login">
						<input class="login_input" type="text" placeholder="Email">
		  				<span class="login_input-border"></span>
						<input class="login_input" type="text" placeholder="Senha">
						<span class="login_input-border"></span>
						<button class="login_submit" type="submit">Login</button>
						<a class="login_reset" href="#">Esqueci a senha</a>
					</form>
			</div>
		</main>
	</body>

</html>