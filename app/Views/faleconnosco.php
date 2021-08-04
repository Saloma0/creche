<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de Creche, crianças">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creche mimos | Faleconnosco</title>
     <link rel="stylesheet" type="text/css" href="\css\estilo1.css">  
    <link rel="stylesheet" type="text/css" href="\css\estilizarmenu.css">
   </head>

<body>
     


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



     <div id="form1">
    <h1 id="formh1">Fale Connosco</h1>

  
    <?php echo form_open('faleconnosco/store') ?>

<form action="inscricao.php" id="formula">
	

	<p> Para não perder à vaga do seu educando, garante-a fazendo uma Pré-Incrição On-line.</p> <br>

	<fieldset>
		<legend> Dados do Encarregado</legend><br>
<div id="div1">
	
	<label for="nomedoresponsavel"> Nome do Responsável: </label><br><br>
	<input type="text" id="nomedoresponsavel" maxlength="26" name="nomedoresponsavel" required><br><br>

	<label for="iddoeducando" >Nº de ID do educando:</label><br><br>
	<input type="number" id="iddoeducando"maxlength="8" name="iddoeducando"><br><br><br>

    <label for="telefone" >Telefone:</label><br><br>
	<input type="number" id="telefone" maxlength="9" name="telefone"><br><br><br>

</fieldset> <br>
	<fieldset>
	<legend>Informações Sobre o Seu Educando</legend> <b><br>

	<h4> <br> Mensagem</h4>
	<textarea name="mensagem" rows="10" cols="70" placeholder=" Deixe aqui a sua mensagem."></textarea> <br><br>

	<input type="submit" value="Cadastrar"/> <button type="reset">Limpar</button>

<br><br>

</fieldset>

</div>


</fieldset>



</form>

<?php echo form_close() ?>


    
</body>
</html>