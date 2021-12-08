<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
<h1>Contatos</h1>
<hr>
<div class="container">
	<table class="table table-bordered tabel-striped" style="top: 40px;">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Email</th>
				<th><a href="?controller=ContatosController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
			</tr>
		</thead>
		<tbody>
			<?php
            if ($contatos) {
            	foreach ($contatos as $contato) {
            		?>
            		<tr>
            			<td><?php echo $contato->nome;?>/</td>
            			<td><?php echo $contato->telefone;?>/</td>
            			<td><?php echo $contato->email;?>/</td>
            			<td>
            				<a href="?controller=ContatosController&method=editar&id=<?php echo $contato->id; ?>" class="btn btn-primary btn-sm">Editar</a>
            				<a href="?controller=ContatosController&method=excluir&id=<?php echo $contato->id; ?>" class="btn btn-danger btn-sm">Excluir</a>

            			</td>
            		</tr>
            		<?php
            	}
            }
            else{
            	?>
            	<tr>
            		<td coldspan="5">Nenhum registro encontrado</td>
            	</tr>
            	<?php
            }
 			?>
		</tbody>
	</table>
</div>
</body>
</html>