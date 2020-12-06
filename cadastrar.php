<?php
	require_once 'CLASSES/usuarios.php';
	$u = new Usuario();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Cadastro</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
<div id="corpo-form-cad">
	<h1>Cadastrar</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
		<input type="email" name="email" placeholder="Usuário" maxlength="40">
		<input type="password" name="senha" placeholder="Senha" maxlength="15">
		<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
		<input type="submit" value="Cadastrar">
	</form>
</div>
<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("f1nzzxyvkkqvzkho" , "ixnzh1cxch6rtdrx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com" , "y97ggnccrr89167r" , "rdn20m8ld5opdhwg");
		if($u->msgErro == "")//se esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$email,$senha))
				{
					?>
					<div id="msg-sucesso">
					Cadastrado com sucesso! Acesse para entrar!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Email ja cadastrado!
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
					As senhas não correspondem
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
			</div>
			<?php
		}
	}else
	{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
	}
}


?>
</body>
</html>