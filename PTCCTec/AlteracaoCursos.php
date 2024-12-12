<?php

        include("conexao.php");
        $id= $_POST['txidCurso'];
        $nomeCurso = $_POST['txNomeCurso'];
        $carga = $_POST['txCarga'];
        $stmt = $pdo->prepare("
            update tbCursos set
                nomeCurso='$nomeCurso',
                carhaHoraria='$carga'
                where codCurso ='$id';
        ");	 

        $stmt-> execute();
            header("location:ConsultarCursos.php");


    ?>  