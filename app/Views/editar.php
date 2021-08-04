<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="\css\estilo1.css">	
	<link rel="stylesheet" type="text/css" href="\css\estilizarmenu.css">
    <title>Editar Dados</title>
</head>
<body>

<!-- Imagem e texto -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="\admin">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Admin
  </a>
</nav>

<?php echo anchor(base_url('Admin'),'Voltar') ?>



<?php echo form_open('inscricao/store') ?>

<form action="inscricao.php" id="formula">
	

	<p> Para não perder à vaga do seu educando, garante-a fazendo uma Pré-Incrição On-line.</p> <br>

	<fieldset>
		<legend> Dados do Encarregado</legend><br>
<div id="div1">

<input type="hidden" name="id" value="<?php echo $insc['id'] ?>">

	<label for="nomedoresponsavel"> Nome do Responsável: </label><br><br>
	<input type="text" value="<?php echo $insc['nomedoresponsavel'] ?>" id="nomedoresponsavel" maxlength="26" name="nomedoresponsavel" required><br><br>


	<label for="email">Email:</label><br><br>
	<input type="email" id="email" name="email" value="<?php echo $insc['email'] ?>" required><br><br>
	<label for="telefone" >Telefone:</label><br><br>
	<input type="number" id="telefone" maxlength="9" name="telefone" value="<?php echo $insc['telefone'] ?>" required ><br><br><br>
</fieldset> <br>
	<fieldset>
	<legend>Informações Sobre o Seu Educando</legend> <b><br>
	
	</div>

	<div id="div2">

		<p id="esp"> Atenção: Cada Responsável tem direito à reservar apenas 3 vagas, caso queira reservar mais vagas, passe nas nossas instalações ou Faça um novo cadastro.</p>

	<label for="ncriancas" id="ncriancas"> Qual é o número de crianças que pretende Matricular: </label>

	<input type="number" name="ncriancas" id="ncriancas" min="1" max="3" value="<?php echo $insc['ncriancas'] ?>" required><br><br>

	<label  for="turma">Turma à Matricular:</label><br> <br>

	<p>
		<input type="radio" name="turma" value="Berço"/>Berço
		<input type="radio" name="turma" value="Infantário"/> Infantário
		<input type="radio" name="turma" value="Creche"/>Creche
		<input type="radio" name="turma" value="ATL"/>ATL

	</p>

	<h4> <br> Alguma deficiência?</h4>

	<p>Se sim, por favor Explique abaixo Qual é: </p>

	<input type="text " value="<?php echo $insc['deficiencia'];?>" name="deficiencia" rows="10" cols="70" placeholder=" Por favor indique-nos se criança apresenta alguma deficiência, alergias, ou precisa de uma atenção em especial:">
	<br><br>
	<input type="submit" value="Cadastrar"/> <button type="reset">Limpar</button>

<br><br>

</fieldset>

</div>



</fieldset>



</form>

<?php echo form_close() ?>
    
</body>
</html>