<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta name="description" content="Site de Creche, crianças">
	<link rel="stylesheet" type="text/css" href="\css\estilo1.css">	
	<link rel="stylesheet" type="text/css" href="\css\estilizarmenu.css">
	<title>Creche mimos | Inscricao</title>
</head> <br>

<nav id="topo">
	<h1></h1>
	<ul>
    <li><a href="\">Home</a></li>
<li><a href="\funcionamento">Funcionamento</a></li>
<li><a href="\servicos">Serviços</a></li>
<li><a href="\inscricao">Pré-Inscrição</a></li>
<li><a href="\sobre">Sobre Nós</a></li>
<li><a href="\faleconnosco">Fale Connosco</a></li>
	</ul>
	</nav>

<body>
	<br>
	<br>
	<br>
	<br>
	
	<h2 id="pr2">Faça a inscrição do seu educando</h2>
	

    <?php echo form_open('inscricao/store') ?>

<form action="inscricao.php" id="formula">
	

	<p> Para não perder à vaga do seu educando, garante-a fazendo uma Pré-Incrição On-line.</p> <br>

	<fieldset>
		<legend> Dados do Encarregado</legend><br>
<div id="div1">
	
	<label for="nomedoresponsavel"> Nome do Responsável: </label><br><br>
	<input type="text" id="nomedoresponsavel" maxlength="26" name="nomedoresponsavel" required><br><br>
	<label for="email">Email:</label><br><br>
	<input type="email" id="email" name="email" required><br><br>
	<label for="telefone" >Telefone:</label><br><br>
	<input type="number" id="telefone" maxlength="9" name="telefone"><br><br><br>
</fieldset> <br>
	<fieldset>
	<legend>Informações Sobre o Seu Educando</legend> <b><br>
	
	</div>

	<div id="div2">

		<p id="esp"> Atenção: Cada Responsável tem direito à reservar apenas 3 vagas, caso queira reservar mais vagas, passe nas nossas instalações ou Faça um novo cadastro.</p>

	<label for="ncriancas" id="ncriancas"> Qual é o número de crianças que pretende Matricular: </label>

	<input type="number" name="ncriancas" id="ncriancas" min="1" max="3" value="1" required><br><br>

	<label  for="turma">Turma à Matricular:</label><br> <br>

	<p>
		<input type="radio" name="turma" value="Berço"/>Berço
		<input type="radio" name="turma" value="Infantário"/> Infantário
		<input type="radio" name="turma" value="Creche"/>Creche
		<input type="radio" name="turma" value="ATL"/>ATL

	</p>

	<h4> <br> Alguma deficiência?</h4>

	<p>Se sim, por favor Explique abaixo Qual é: </p>
	<textarea name="deficiencia" rows="10" cols="70" placeholder=" Por favor indique-nos se criança apresenta alguma deficiência, alergias, ou precisa de uma atenção em especial:"></textarea> <br><br>

	<input type="submit" value="Cadastrar"/> <button type="reset">Limpar</button>

<br><br>

</fieldset>

</div>



</fieldset>



</form>

<?php echo form_close() ?>
</body>


</html>