<?php
		# Recuperar um arquivo para um array
		$usuarios = file("usuarios.txt");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listagem - PHP UTD ONLINE</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<hr>
			<h3> Listagem de Nomes </h3><br>

			<table class="table">
				<thead>
					<th> Nome </th>					
				</thead>
				<tbody>

					<?php
						foreach ($usuarios as $usuario){
							# Quebrndo a string
							$dado = $usuario;						
					?>
						<tr>
							<td><?=$dado;?></td>								
						</tr>
					<?php }?>
					
				</tbody>
				
			</table>
			<a href="cadastro.php" class="btn btn-primary"> Cadastrar Usuarios</a>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>