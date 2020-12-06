<?php
include_once 'db_connect.php';
include_once 'header.php';

if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM produtos WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;	
?>

 
<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light">Editar produto</h3>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome do produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="marca" id="marca" value="<?php echo $dados['marca'];?>">
				<label for="marca">Marca do produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="preço" id="preço" value="<?php echo $dados['preço'];?>">
				<label for="preço">Preço do produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="quantidade" id="quantidade" value="<?php echo $dados['quantidade'];?>">
				<label for="quantidade">Quantidade do produto</label>
			</div>

			<button type="submit" name="btn-editar" class="btn black">Atualizar</button>
			<a href="areaprivada.php" class="btn green">Lista de produtos</a>
		</form>
		
	</div>
</div>

<?php
include_once 'footer.php';
?>

<a href="Sair.php" class="btn blue"> Sair </a>