<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contato</title>
</head>
<body>
<style type="text/css">
	body{font-family: Arial , Helvetica , sans-serif}
	.content{display: flex;justify-content: center}
	.contato{width:  100%;max-width: 500px;}
	.form{display: flex;flex-direction: column}
	.field{padding: 10px;margin-bottom: 15px;border: 1px solid #DDD;border-radius: 5px ;font-family: Arial, Hevetica , sans-serif;font-size: 16px;}
	textarea{height: 150px;}

</style>


<section class="content">
	
	<div class="contato">
     <h3>  Formulário de contato </h3>		
     <form class="form" method="POST" action="./email.php">
     	
     <input class="field" name="name" placeholder="Nome">
     <input class="field" name="email" placeholder="E-mail">
     <textarea class="field" name="message" placeholder="Digite sua mensagem aqui">
     	
     </textarea>

    <input class="field" type="submit" name="Enviar">
     </form>


	</div>
</section>
</body>
</html>