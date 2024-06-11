<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/30f9a29c3f.js" crossorigin="anonymous"></script>
	<title>select</title>
</head>
<body>
	<form method="post" action="index.php">
		<div class="select_container">
			<h3 id="select_btn">Selecione um item <i class="fa-solid fa-chevron-down"></i></h3>
			<div id="options_content" class="radio_container">
				<label for="op1" class="selectLabel">
					<p>Opção 1</p>
					<input type="radio" name="opcoes" value="op1" id="op1">
				</label>
				<label for="op2" class="selectLabel">
					<p>Opção 2</p>
					<input type="radio" name="opcoes" value="op2" id="op2">
				</label>
				<label for="op3" class="selectLabel">
					<p>Opção 3</p>
					<input type="radio" name="opcoes" value="op3" id="op3">
				</label>
				<label for="op4" class="selectLabel">
					<p>Opção 4</p>
					<input type="radio" name="opcoes" value="op4" id="op4">
				</label>
				<label for="op5" class="selectLabel">
					<p>Opção 5</p>
					<input type="radio" name="opcoes" value="op5" id="op5">
				</label>
			</div>
		</div>
		<button type="submit">Enviar</button>
	</form>
	<div class="printInfo">
		<?php
		if($_POST){
			$opcao = $_POST['opcoes'];
			if(isset($opcao)){
				echo '<h2 style="margin-left:50px;margin-top:20px;">Opção escolhida é: '.$opcao.'</h2>';
			} else{
				echo 'Nenhuma opção selecionada';
			}
		}
		?>
	</div>
	<script src="script.js"></script>
</body>
</html>