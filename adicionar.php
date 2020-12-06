<?php
include_once 'header.php';
?>

 
<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light">Novo produto</h3>
		<form action="create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome do produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="marca" id="marca">
				<label for="marca">Marca do produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="preço" id="preço">
				<label for="preço">Preço do produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="quantidade" id="quantidade">
				<label for="quantidade">Quantidade do produto</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn black">Cadastrar</button>
			<a href="areaprivada.php" class="btn green">Lista de produtos</a>
		</form>
		
	</div>
</div>

<?php
include_once 'footer.php';
?>

<a href="Sair.php" class="btn blue"> Sair </a>