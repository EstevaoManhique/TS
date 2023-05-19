<?php
  if(!isset($_SESSION)){
    session_start();
  }
	
  $isValid = false;
	if(isset($_SESSION['error'])){
		$isValid = ($_SESSION['error']) ? true:false;
		unset($_SESSION['error']);
	}
?>
<!doctype html>
<html lang="en"> 
	<head> 	
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="stylesheet" href="/View/login.css">
		<title>Login</title>
	</head>
	 
	<body>
	<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Nos Somos o Restaurante Kalam</h4>
                </div>

                <form method="post" class="login_form" action="/user/login" >
				<!--input type="hidden" name="type" value="login"-->
                  <p>Insira os seus dados aqui!</p>

                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Email ou nome de usuario" required/>
                    <label class="form-label" for="form2Example11">Email</label>
                  </div>

                  <div class="form-outline mb-2">
                    <input name="senha" type="password" id="form2Example22" class="form-control" placeholder="Senha" required/>
                    <label class="form-label" for="form2Example22">Senha</label>
                  </div>
					
				  <?php if($isValid):?>
					<p class="text-danger d-flex justify-content-center">Credencias Invalidas </p>
                  <?php endif;?>
					<div class="text-center pt-1 mb-5 pb-1">
                    <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login">Entrar</button>
                    <a class="text-muted" href="#!">Esqueceu a Senha?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Nao tem conta?</p>
                    <button type="submit" class="btn btn-outline-danger">Crie Uma</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h6 class="mb-4">Nós Somos Mais Do Que Um Simples Restaurante</h6>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</body>

</html>