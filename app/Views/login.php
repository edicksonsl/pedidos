<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGo</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css">
    <link rel="stylesheet" href="login/css/login.css">
    
</head>
<body>
    <div class="container">
	<div class="screen">
		<div class="screen__content">

			<img style="float: left; margin: 80px 15px 15px 25px;" src="login/image/logo.png"
    			 alt="Logotipo de HTML5" width="270"/>
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Usuario / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Clave">
				</div>
				<button class="button login__submit">
					<span class="button__text">Iniciar Sesión</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
				<p>
					<a href=" <?php echo base_url(); ?>categorias/ " class="btn btn-info">Entrar</a>
				</p>				
			</form>
			
		</div>
		<div class="screen__background">





		
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>