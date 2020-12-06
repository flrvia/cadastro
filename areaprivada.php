<?php
//sessao
session_start();
if(isset($_SESSION['mensagem'])): ?>
 <script>
 	// msg 
 	window.onload = function() {
 			M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
 	};
 </script>
<?php
endif;
session_unset();

//conexao
include_once 'db_connect.php';
//header
include_once 'header.php';
?>
<?php
include_once 'footer.php';
?>

<div class="row">
	<div class="col s12 m8 push-m2 ">
		<h3 class="light"> Produtos</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome do produto</th>
					<th>Marca do produto</th>
					<th>Preço do produto</th>
					<th>Quantidade do produto</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM produtos";
				$resultado = mysqli_query($connect, $sql);

				if(mysqli_num_rows($resultado) > 0):

				while ($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['marca']; ?></td>
					<td><?php echo $dados['preço']; ?></td>
					<td><?php echo $dados['quantidade']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating purple"><i class="material-icons">edit</i></a></td>
					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating pink modal-trigger"><i class="material-icons">delete</i></a></td>
					<!-- Modal Structure -->
					<div id="modal<?php echo $dados['id']; ?>" class="modal">
						<div class="modal-content">
							<h4>OPS</h4>
							<p>Tem certeza que deseja excluir esse produto?</p>
						</div>
						<div class="modal-footer">
							

							<form action="delete.php" method="POST" >
								<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
								<button type="submit" name="btn-deletar" class="btn red">Sim, desejo deletar</button>
								
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
							</form>


						</div>
					</div>
				</tr>
			<?php 
			endwhile; 
			else: ?>

			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
			</tr>
			
			<?php
		endif;
		?>

			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn black">Adicionar produto</a>
	</div>
</div>

<a href="Sair.php" class="btn blue"> Sair </a>