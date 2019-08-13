<?php
# Funções principais
function __ver($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
function exibirMensagem(){
	echo "<a href='revisaoFormularios.php' style='text-decoration: none;font-size: 1.5em;color: orange;font-weight: bold;background: #e3e3e3;padding: 5px 15px;border-radius: 10px 7px;'>←</a>";
	echo "<center><h3>Conta criada com sucesso!!!</h3><br>";
	global $priNome, $ultNome, $email, $senha, $confSenha;
    echo "Primeiro nome: ";
    echo $priNome;
    echo "<br>Último nome: ";
    echo $ultNome;
    echo "<br>Email: ";
    echo $email;
    echo "<br>Senha: ";
    echo $senha;
    echo "<br>Confirmação: ";
    echo $confSenha;
    echo "</center>";
}

# V e r i f i c a t i o n  I N T E N S I F I E S
if(isset($_POST['enviar'])){
	if(isset($_POST['checar'])){
		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			// Aplicando as rstrições de caracteres propostas na função _VER
			$priNome = __ver($_POST['first_name']);
			$ultNome  = __ver($_POST['last_name']);
			$email = __ver($_POST['email']);
			$senha = __ver($_POST['password']);
			$confSenha = __ver($_POST['confirm_password']);

			//Verificando se os conteúdos estão com palavras
			if(!empty($priNome) && !empty($ultNome) && !empty($email) && !empty($senha) && !empty($confSenha)){
			    
			    $mostrarMensagem = true;
			}else{
				$mostrarMensagem = false;
				header("location: revisaoFormularios.php?msg=3");
			}
		}
	}else{
		header("location: revisaoFormularios.php?msg=2");
	}
}else{
	header("location: revisaoFormularios.php?msg=1");
}


if($mostrarMensagem){
   exibirMensagem();
}