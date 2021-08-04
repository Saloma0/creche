<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Área restricta</title>
    <script>
        function confirma(){
            if(!confirma('Deseja apagar?')){
                return false;
            }else{
                return true;
            }
        }
    </script>
</head>
<body>

<!-- Imagem e texto -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="\admin">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Admin
  </a>
</nav>

<?php echo anchor(base_url('Home'),'Ir para início') ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome do responsavel</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Nº de crianças</th>
      <th scope="col">Turma</th>
      <th scope="col">Deficiência</th>
      <th scope="col">Operações</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($inscricoes as $insc):?>
    <tr>
      <th scope="row"><?php echo $insc['id'];?></th>
      <td><?php echo $insc['nomedoresponsavel'];?></td>
      <td><?php echo $insc['email'];?></td>
      <td><?php echo $insc['telefone'];?></td>
      <td><?php echo $insc['ncriancas'];?></td>
      <td><?php echo $insc['turma'];?></td>
      <td><?php echo $insc['deficiencia'];?></td> 
      <td>
          <?php echo anchor('admin/edit/'.$insc['id'],'Editar');?>
    -
          <?php echo anchor('admin/delete/'.$insc['id'],'Eliminar', ['onclick' => 'return confirma()']);?>

    </td> 
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    
</body>
</html>