<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">cursos</th>
      <th scope="col">turmas</th>
      <th scope="col">local</th>
      <th scope="col">Excluir</th>
      <th scope="col">alterar</th>

    </tr>
  </thead>
  <tbody>

<?php
    $stmt= $pdo->prepare("select * from tbApresentacaoEtec");
    $stmt-> execute();
         
         while($row= $stmt -> fetch(PDO::FETCH_BOTH)){
         ?>
        <tr>
        <th scope="row">   <?php    echo $row[0] ?>  </th>
        <td>        <?php  echo $row[1]   ?>  </td>
        <td>     <?php  echo $row[2]   ?>  </td>
        <td>     <?php  echo $row[3]   ?>  </td>
        <td>
                    <a href="excluirApresentacaoEtec.php?id=<?php echo $row [0];  ?>">Excluir </a>
                </td>                
                <td>
                    <a href="#">Alterar / Editar </a>
                </td> 



        <?php } ?>
  </tbody>                  
</table>


</body>
</html>