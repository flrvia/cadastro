<?php


/*

 1º aula
Sintaxe inicial php 

*/

//echo "1º Aula"; // echo imprimir/mostrar na tela/sistema
//print("2º Aula") // print() imprimir/mostrar na tela/sistema

// variaveis

//$aluna = "Aline"; // = é receber        tipo-> string
//$idade = 25;	//						tipo-> int	
//$altura = 1.68; // utilizar . para numeros quebrados, e não virgula ","  // float, double e decimal 
// bool true ou false;

//echo "A aluna $aluna é do ADS e tem $idade e $altura de altura !!!"; 

// concatenar(juntar)
// inserir ''    \'
//echo 'A aluna é ' .$aluna. ' e tem \'20\' anos';

// inserir ""    \"
//echo "A aluna é " .$aluna. " e tem \"20\" anos";
//echo "A aluna é " .$aluna. " e tem '20' anos";

//---------------------------------------------------------------------
// operadores de atribuição
// + soma
// - sub.
// * mul.
// / div
// % Módulo(resto)
// ** Exponenciação
// = recebe

//$a = 9;
//$b = 4;
//$ab = $a / $b;
//echo "O resultado é $ab";

//$a = $a * $b; // resultado é 50
//$a *= $b; // resultado é 50
//echo "$a";

//echo $a % $b;
//echo $a ** $b; //(3 * 3 * 3 * 3)

//$a ++; soma ++ eq  +1 
//echo $a;

//echo --$a;  -- eq  -1 


// Operadores de comparação
// == igual
// < menor   
// > maior
// <= menor igual
// >= maior igual
// <> diferente 
// != negação

//-----------------------------------------------------
// Operadores lógicos
// (&& - and) e
// (|| - or) ou
// ! negação


//---------------------------------------------------------------------
//Comando decisão
// if (se)

//$numero = 5;

// exemplo 1

//if($numero == 10):  //SE
	//echo "O número é igual a 10 !!!";
//else: // se não
	//echo "O número é diferente de 10 !!!";
//endif;

// exemplo 2

//if ($numero == 10)
	//echo "O número é igual a 10 !!!";
//else
	//echo "O número é diferente de 10 !!!";


// 10 e 15

//if ( ($numero >= 10) or ($numero <= 15) )
	//echo "O número ".$numero." é maior igual a 10 e menor igual a 15 !!!";
//else
	//echo "O número ".$numero." não maior igual a 10 e não é menor igual a 15 !!!";


//if (!($numero == 10))
	//echo "Não é igual a 10!";
//else
	//echo "Sim é igual a 10 !!!";

//if ($numero != 10)
	//echo "Não é igual a 10!";
//else
	//echo "Sim é igual a 10 !!!";

//--------------------------------------------------------------------------
//Aula - 08/09/2020
//Comando decisão
// switch case


/* 

$cor = "Azul";

switch($cor)
{
	case 'Azul':
		echo "Sua cor é Azul";
	break;

	case 'Verde':
		echo "Sua cor é Verde";
	break;

	default:
		echo "Sua cor é ".$cor;
	break;
}

*/

//$Nota = 6;
//echo ($Nota >= 7) ? "Aprovado !!! " : "Reprovado !!!";


//if ($Nota >= 7)
	//echo "Aprovado !!! ";
//else
	//echo "Reprovado !!!";


//-------------------------------------------------------------------
//Comando repetição
// while

//$i = 1;

//while($i <= 10):
	//echo "Contador é ".$i."<br/>";
	//$i++;
//endwhile

//while($i <= 1000) // igual a c# e java
//{
	//echo "Contador é ".$i."<br/>";
	//$i++;
//} 

//-------------------------------------------------------------------
//Comando repetição
// for

//for($i = 0; $i <= 12; $i++):
	//echo "Contador é ".$i."<br/>";
//endfor

//for($i = 50; $i <= 60; $i++)
//{
	//echo "Contador é ".$i."<br/>";	
//}


//-------------------------------------------------------------------
// array (lista)

//$carro = array("Gol", "Palio", "Uno");
//$car   = ["Uno", "Palio", "Gol"];

//echo $car[0]."<br/>";
//echo $car[2]."<br/>";

//echo $car[0]."<br/>".$car[2];

//var_dump($car);
//print_r($car);

// Quatidade
//echo "A quantidade de carros são: " .count($car);

//Adicionar um Novo Elemento no Inicio do Array
//array_unshift($car, "Fit");
//var_dump($car);


//Adicionar um Novo Elemento no Final do Array
//array_push($car, "Fit");
//var_dump($car);

// Remover o Primeiro Elemento de um Array
//array_shift($car);
//var_dump($car);

//Remover o Último Elemento de um Array
//array_pop($car);
//var_dump($car);

//Ordenando os elementos de forma crescente
//sort($car);
//var_dump($car);

//Ordenando os elementos de forma decrescente
//rsort($car);
//var_dump($car);

//-------------------------------------------------------------------
//Comando repetição
// foreach

//$carro = array("Gol", "Palio", "Uno", "Fit");

//foreach ($carro as $carroItem):
	//echo "Seu carro é: ".$carroItem."<br/>";
//endforeach

//foreach ($carro as $carroItem)
//{	
	//echo "Seu carro é: ".$carroItem."<br/>";
//}

//foreach ($carro as $indice => $carroItem)
//{
	//echo $indice." - ".$carroItem."<br/>";
//}

//---------------------------------------------------------------------------------
//Exercicio de Decisão
//Façam uma rotina que receba 2 valores(Etanol e Gasolina), se o valor do Etanol for maior igual a 
// 70% do valor da gasolina, imprimir "Compensa !!!", se não imprimir "Não Compensa !!!"

//$Etanol = 3.5;
//$Gasolina = 4.1;

// Gasolina -- 100%
// Etanol   --  x

//$Resultado = number_format((($Etanol * 100) / $Gasolina), 2, '.', '');

//if($Resultado >= 70)
	//echo "Não Compensa !!! <br/>".$Resultado."%";
//else
	//echo "Compensa !!! <br/>".$Resultado."%";	

//---------------------------------------------------------------------------------
//Exercicio de Repetição
// Façam a leitura dos numeros de 1 a 100, e não imprimir os numeros 25, 50 e 75.

//for ($i=1; $i <= 100; $i++) 
//{ 
	//if(($i != 25) && ($i != 50) && ($i != 75))	
		//echo $i."<br/>";	
//}

//$i=1;
//while ($i <= 100) 
//{
	//if(($i != 25) && ($i != 50) && ($i != 75))	
		//echo $i."<br/>";		
		
	//$i++;
//}

//---------------------------------------------------------------------------------
// Funções simples

//function soma()
//{
	//echo "A soma é 20";
//}

//function soma()
//{	
	//$x = 30;
	//$y = 60;
	//echo "A soma é: ".$x+$y);
//}

//Funções Globais

/*
$x = 60;
$y = 30;

function soma()
{	
	echo "A soma é: ".($GLOBALS['x']+$GLOBALS['y'])."<br/>";
}

function mult()
{	
	echo "A mult. é: ".($GLOBALS['x']*$GLOBALS['y'])."<br/>";
}

function div()
{	
	echo "A div. é: ".($GLOBALS['x']/$GLOBALS['y'])."<br/>";
}

function sub()
{	
	echo "A sub. é: ".($GLOBALS['x']-$GLOBALS['y'])."<br/>";
}

soma();
mult();
div();
sub();

*/

//---------------------------------------------------------------------------------
/*
$x1 = 60;
$y1 = 30;

function operacoes($x, $y) // valores por parametros
{	
	echo "A soma é: ".($x+$y)."<br/>";
	echo "A mult. é: ".($x*$y)."<br/>";
	echo "A div. é: ".($x/$y)."<br/>";
	echo "A sub. é: ".($x-$y)."<br/>";
}

operacoes($x1, $y1);
*/

/*
$x1 = 60;
$y1 = 30;

function soma($x, $y)
{	
	echo "A soma é: ".($x+$y)."<br/>";
}

function mult($x, $y)
{	
	echo "A mult. é: ".($x*$y)."<br/>";
}

function div($x, $y)
{	
	echo "A div. é: ".($x/$y)."<br/>";
}

function sub($x, $y)
{	
	echo "A sub. é: ".($x-$y)."<br/>";
}

function operacoes($x, $y)
{
	soma($x, $y);
	mult($x, $y);
	div($x, $y);
	sub($x, $y);
}

operacoes($x1, $y1);
*/

//---------------------------------------------------------------------------------
/*

$nome = "André";
$idade = 21;

function Cadastro($n, $i)
{
	echo "Seu nome é: ".$n.", e sua idade é: ".$i;
}

Cadastro($nome, $idade);
*/

//---------------------------------------------------------------------------------
/* Tipo(Método) POST
	if(isset($_POST['btnEnviar'])) // se existe
	{
		echo $_POST['valor1'] + $_POST['valor2'];
	}

/* Tipo(Método) GET

	if(isset($_GET['btnEnviar'])) // se existe
	{
		echo $_GET['valor1'] + $_GET['valor2'];
	}

	<html>
	<head>
		<title> Aula com formularios </title>		
	</head>
	<body>
		<form action="Resultado.php" method="POST">
			Valor1: <input type="text" name="valor1">

			Valor2: <input type="text" name="valor2">

			<input type="submit" name="btnEnviar">
			
		</form>		
	</body>
</html>
?>

*/

//---------------------------------------------------------------------------------
/*
	if(isset($_POST['btnLogar'])) // se existe
	{	
		if( ($_POST['txtUsuario'] == 'maria') && ($_POST['txtSenha'] == 123456))
			header('Location: Resultado.php'); // Redirect
		else
			echo "Usuario ou senha incorretos !!!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style type="text/css">
		
		.geral
		{
			width: 260px;
			height: 100px;
			background-color: #4682B4;		
			margin: auto;
			margin-top: 150px;
		}

		.lblUsu
		{
			width: 60px;
			height: 40px;			
			float: left;
		}

		.lblSenha
		{
			width: 60px;
			height: 40px;			
			float: left;
		}

		.inp
		{
			width: 190px;
			height: 40px;			
			float: left;
		}

	</style>
</head>
<body>
	<form method="POST">
		<div class="geral"> 
			<div class="lblUsu">Usuario:</div>
			<div class="inp">
				<input type="text" name="txtUsuario">
			</div>
						
			<div class="lblSenha">Senha: </div>
			<div class="inp">
				<input type="password" minlength="6" maxlength="12" name="txtSenha">	
			</div>			
			
			<input type="submit" name="btnLogar">
		</dir>
	</form>
</body>
</html>


//---------------------------------------------------------------------------------

	if(isset($_POST['btnSelecionar'])) 
	{
		if($_POST['selectEstados'])		
			echo "Você escolheu o estado: ".$_POST['selectEstados'];		
		else
			echo "Você não escolheu um Estado !!!!";

		if(!empty($_POST['selectEstados'])) // empty vazio		
			echo "Você escolheu o estado: ".$_POST['selectEstados'];		
		else
			echo "Você não escolheu um Estado !!!!";
	}

<html>
<head>
	<title>Aula Programação Web - 29/09/2020  </title>
</head>
<body>
	<br>
	<br>
	<form method="post">
		<select name="selectEstados">
			<option value="" disabled selected>Escolha um Estado</option>
			<option value="São Paulo">São Paulo</option>
			<option value="Rio de Janeiro">Rio de Janeiro</option>
			<option value="Minas Gerais">Minas Gerais</option>
			<option value="Tocantins">Tocantins</option>
			<option value="Paraná">Paraná</option>
		</select>

		<input type="submit" name="btnSelecionar" value="Selecionar">
		
	</form>	
</body>
</html>

//---------------------------------------------------------------------------------
<?php
	if (isset($_POST['btnEnviar'])) 
	{
		if(!empty($_POST['carros'])) 		
			echo 'Você escolheu o carro: '.$_POST['carros'];		
		else		
			echo 'Escolha um carro !!!';		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - 29/09/2020 - Programação Web</title>
</head>
<body>
	<br>
	<br>
	<form method="post">		
		Qual o carro do ano? <br/>
		<input type="radio" name="carros" value="Uno"> Uno
		<input type="radio" name="carros" value="Gol"> Gol
		<input type="radio" name="carros" value="Palio"> Palio

		<input type="submit" name="btnEnviar">
	</form>
</body>
</html>

//---------------------------------------------------------------------------------

<?php
	if (isset($_POST['btnEnviar'])) 
	{
		echo "Você escolheu o carro: <br>";

		if (isset($_POST['Uno']))	
			echo $_POST['Uno']."<br>";

		if (isset($_POST['Gol']))	
			echo $_POST['Gol']."<br>";	
		
		if (isset($_POST['Palio']))	
			echo $_POST['Palio']."<br>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - 29/09/2020 - Programação Web</title>
</head>
<body>
	<br>
	<br>
	<form method="POST">
		<input type="checkbox" name="Uno" value="Uno">Uno
		<input type="checkbox" name="Gol" value="Gol">Gol
		<input type="checkbox" name="Palio" value="Palio">Palio

		<input type="submit" name="btnEnviar">
	</form>
</body>
</html>

//---------------------------------------------------------------------------------
--- Exercicio 1
Melhorar a logica(if) checkbox, fazer de uma forma alternativa.
Utize 10 itens como exemplo


if (isset($_POST['btnEnviar']))
{
	if (!empty($_POST['carro']))
	{		
		echo "Você escolheu os carros: </br>";
		
		for ($i=0; $i < count($_POST['carro']); $i++) 
			echo "</br>".$_POST['carro'][$i];				
	}
	else
		echo "Escolha pelo menos um veículo";	
}

<!DOCTYPE html>
<html>
<head>
	<title>Exercicio</title>
</head>
<body>
	<form style="margin: 20px 0;" method="POST">
		<input type="checkbox" name="carro[]" value="Uno">Uno<br/>
		<input type="checkbox" name="carro[]" value="Gol">Gol<br/>
		<input type="checkbox" name="carro[]" value="Palio">Palio<br/>
		<input type="checkbox" name="carro[]" value="Prisma">Prisma<br/>
		<input type="checkbox" name="carro[]" value="Chevet">Chevet<br/>
		<input type="checkbox" name="carro[]" value="Toro">Toro<br/>
		<input type="checkbox" name="carro[]" value="Corsa">Corsa<br/>
		<input type="checkbox" name="carro[]" value="Opala">Opala<br/>
		<input type="checkbox" name="carro[]" value="Ka">Ka<br/>
		<input type="checkbox" name="carro[]" value="Hb20">Hb20<br/>

		<input style="margin-top: 20px;" type="submit" name="btnEnviar">
	</form>



//---------------------------------------------------------------------------------
//Exercicio 2
//Criar um formulario de cadastro de cliente, utilize todos os controles(input, select).
//Ao clicar no botão "submit", enviar todo os dados para a proxima pagina, formantando os dados.

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atividade</title>
</head>
<body>	
	<div>
		<form method="POST" action="salva_mensagem.php">
	        <div>
	            <div>
	                <label for="nome">Nome:</label>
	                <input type="text" name="nome" placeholder="Nome Completo" id="nome" required>
	            </div>
	            <div>
	           	    <input type="radio" name="sexo" value="M"> M
					<input type="radio" name="sexo" value="F"> F
	            </div>
	            <div>
	            	<input type="checkbox" name="Uno" value="Uno">Uno
					<input type="checkbox" name="Gol" value="Gol">Gol
					<input type="checkbox" name="Palio" value="Palio">Palio
	            </div>
	            <div>
	               <select name="selectEstados">
						<option value="" disabled selected>Escolha um Estado</option>
						<option value="São Paulo">São Paulo</option>
						<option value="Rio de Janeiro">Rio de Janeiro</option>
						<option value="Minas Gerais">Minas Gerais</option>
					</select>
	            </div>
	        </div>
            <input type="submit" value="Enviar">
        </form>	
	</div>
</body>
</html>

//---------------------------------------------------------------------------------
// Seleciona informações utilizando while

$server = "localhost";
$user = "root";
$password = "";
$banco = "teste";

//criar uma conexão
$conexao = new mysqli($server, $user, $password, $banco);

// Testar a conexão
if($conexao -> connect_error)
	echo "A conexão falhou: ".$conexao -> connect_error;

$result = $conexao -> query("SELECT * FROM alunos");

while ($row = $result -> fetch_assoc()) 
{
	echo "Nome: ".$row["Nome"]."<br>";
}

// Exercicio
// Mostrar dados via php/mySql utilizando for e foreach

?>

//----------------------------------------------------------------
salva_mensagem.php

<?php

	echo "Seu nome é: ".$_POST['nome']."<br>";
	echo "Sexo: ".$_POST['sexo']."<br>";

	if (isset($_POST['Uno']))	
		echo $_POST['Uno']."<br>";

	if (isset($_POST['Gol']))	
		echo $_POST['Gol']."<br>";	
	
	if (isset($_POST['Palio']))	
		echo $_POST['Palio']."<br>";

	echo "Seu estado é: ".$_POST['selectEstados'];	

//---------------------------------------------------------------------------------
// Seleciona informações utilizando foreach

$server = "localhost";
$user = "root";
$password = "";
$banco = "teste";

//criar uma conexão
$conexao = new mysqli($server, $user, $password, $banco);

// Testar a conexão
if($conexao -> connect_error)
	echo "A conexão falhou: ".$conexao -> connect_error;

$result = $conexao -> query("SELECT * FROM alunos");

foreach ($result as $row) 
{	
	echo "Nome: ".$row["Nome"]." Idade: ".$row["Idade"]." Sexo: ".$row["Sexo"]."<br/>";
}

//---------------------------------------------------------------------------------
*/

/*
$server = "localhost";
$user = "root";
$password = "";
$banco = "teste";

//criar uma conexão
$conexao = new mysqli($server, $user, $password, $banco);

// Testar a conexão
if($conexao -> connect_error)
	echo "A conexão falhou: ".$conexao -> connect_error;

$result = $conexao -> query("SELECT * FROM alunos");

if(isset($_GET['alt']))
{
	$resultAlt = $conexao -> query("SELECT * FROM alunos where AlunosID = ".$_GET['alt'] );

	foreach ($resultAlt as $row) 
	{
		$AlunosIDAlt = $row["AlunosID"];
		$NomeAlt = $row["Nome"];
		$IdadeAlt = $row["Idade"];
		$SexoAlt = $row["Sexo"];
	}

}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="crud.php">

		<br/>

		<input type="hidden" name="AlunosID" value="<?php if(!empty($AlunosIDAlt)) echo $AlunosIDAlt; ?>">

		<br/>
		<label for="nome">Nome: </label>
		<input type="text" name="nome" placeholder="Nome Completo" id="nome" value="<?php if(!empty($NomeAlt)) echo $NomeAlt; ?>" required>
		<br/>
		<label for="idade">Idade: </label>
		<input type="text" name="idade" placeholder="Digite sua idade" id="idade"  value="<?php if(!empty($IdadeAlt)) echo $IdadeAlt; ?>" required>
		<br/>
		<label for="selectSexo">Sexo: </label>
		<select name="selectSexo" required>
			<option value="" disabled selected>Escolha um Sexo</option>
			
			<?php

				if(!empty($SexoAlt))
				{
					if($SexoAlt == "F")
					{
						echo "<option value=\"$SexoAlt\" selected>Feminino</option>";
						echo "<option value=M>Masculino</option>";	
					}
					else
					{
						echo "<option value=\"$SexoAlt\" selected>Masculino</option>";
						echo "<option value=F>Feminino</option>";	
					}
				}
				else
				{
					echo "<option value=M>Masculino</option>";
					echo "<option value=F>Feminino</option>";
				}
			?>

		</select>
		<br/>
		<br/>


		<?php if (!empty($_GET['alt'])): ?>			
			<input type="submit" value="Salvar" name="btnUpdate">
		<?php else:	?>
			<input type="submit" value="Salvar" name="btnSalvar">
		<?php endif	?>


		<br/>
		<br/>

		<table>
			<tr> 
				<td> 
					Nome
				</td>
				<td> 
					Idade
				</td>
				<td> 
					Sexo
				</td>
			</tr>

			<?php
				foreach ($result as $row) 
				{
			?>
					<tr> 
						<td> 
							<?php echo $row["Nome"] ?>
						</td>
						<td> 
							<?php echo $row["Idade"] ?>
						</td>
						<td> 
							<?php echo $row["Sexo"] ?>

						</td>
						<td>
							<a href="index.php?alt=<?php echo $row["AlunosID"] ?>">Alterar</a>
						</td>
						<td>
							<a href="crud.php?del=<?php echo $row["AlunosID"] ?>">Excluir</a>
						</td>
					</tr>
			<?php
				}
			?>			

		</table>
		
	</form>
</body>
</html>

*/?>




<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
<div id="corpo-form">
	<h1>Entrar</h1>
	<form method="POST">
		<input type="email" placeholder="Usuario" name="email">
		<input type="password" placeholder="Senha" name="senha">
		<input type="submit" placeholder="Acessar">
		<a href="cadastrar.php">Ainda não é inscrito?<strong> Cadastre-se</strong></a>
	</form>
</div>
<?php
if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	
	if(!empty($email) && !empty($senha))
	{
		$u->conectar("tela_login","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($email,$senha))
			{
				header("location: areaprivada.php");
			}
			else
			{
				?>
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro; ?>
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