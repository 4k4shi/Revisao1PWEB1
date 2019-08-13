<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
	body{color: #fff; background: #63738a; font-family: 'Roboto', sans-serif; } .form-control{height: 40px; box-shadow: none; color: #969fa4; } .form-control:focus{border-color: #5cb85c; } .form-control, .btn{border-radius: 3px; }
	.signup-form{width: 400px; margin: 0 auto; padding: 30px 0; } 
	.signup-form h2{color: #636363; margin: 0 0 15px; position: relative; text-align: center; }
	.signup-form h2:before, .signup-form h2:after{content: ""; height: 2px; width: 20%; background: #d4d4d4; position: absolute; top: 50%; z-index: 2; } 
	.signup-form h2:before{left: 0; } 
	.signup-form h2:after{right: 0; } 
	.signup-form .hint-text{color: #999; margin-bottom: 30px; text-align: center; }
    .signup-form form{color: #999; border-radius: 3px; margin-bottom: 15px; background: #f2f3f7; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); padding: 30px; } 
    .signup-form .form-group{margin-bottom: 20px; }
	.signup-form input[type="checkbox"]{margin-top: 3px; }
	.signup-form .btn{font-size: 16px; font-weight: bold; min-width: 140px; outline: none !important; }
	.signup-form .row div:first-child{padding-right: 10px; }
	.signup-form .row div:last-child{padding-left: 10px; }
    .signup-form a{color: #fff; text-decoration: underline; }
    .signup-form a:hover{text-decoration: none; } .signup-form form a{color: #5cb85c; text-decoration: none; }
	.signup-form form a:hover{text-decoration: underline; }

	center{
		width: 70%;
		padding: 10px 20px;
		border-radius: 10px 7px;
		color: orange;
		background: white;
		margin: 0 auto;
		font-size: 1.1em;
		cursor: not-allowed;
	}
	center:hover{
</style>
</head>
<body>
<div class="signup-form">

	<?php
		if(isset($_GET['msg'])){
			if($_GET['msg'] == 1)
				echo "<center>Erro na recepção</center>";
			if($_GET['msg'] == 2)
				echo "<center>Clique para aceitar os termos</center>";
			if($_GET['msg'] == 3)
				echo "<center>Algum campo incompleto</center>";

		}
	?>

    <form action="receber.php" method="POST" style="margin-top: 20px;">
		<h2>Criar conta</h2>
		<p class="hint-text">Crie sua conta de usuário. Leva apenas alguns minutos.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="Nome"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Sobrenome"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="E-mail">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Senha">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Repetir senha">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" name="checar"> Eu aceito os <a href="#">termos de uso</a> &amp; a <a href="#">política de privadade</a> deste site.</label> 
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="enviar">Criar usuário</button>
        </div>
    </form>
	<div class="text-center">Já tem usuário? <a href="#">Fazer login</a></div>
</div>
</body>
</html>                            