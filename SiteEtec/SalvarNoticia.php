<?php

 
if(isset($_FILES["arqimage"])){
    $arqINome = $_FILES["arqimage"]["name"];
    $arqITipo = $_FILES["arqimage"]["type"];
    $arqITamanho = $_FILES["arqimage"]["size"];
    $arqINomeTemp = $_FILES["arqimage"]["tmp_name"];
    $erroImgMarc = $_FILES["arqimage"]["error"];
    if($erroImgMarc==0){			
        if(is_uploaded_file($arqINomeTemp)){
            if(move_uploaded_file($arqINomeTemp,"imgNoticia/". $arqINome)){																														
                $caminhoI = 'imgNoticia/' . $arqINome;
                echo $caminhoI;
            }
            else{
                $erro = "Falha ao mover imagem do marcador";
                echo "$erro";
            }
        }
        else{
            $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
            echo "$erro";
        }
    }
    else{
        $erro = "Erro no envio: " . $erro;			
        echo "$erro";
    }						
}	
else{
    $erro = "Imagem do Marcador enviado não encontrado";
    echo "$erro";
}	

    include("conexao.php");

    $desc = $_POST['txDesc'];
    $data = $_POST['txData2'];
    $local = $_POST['txLocal'];
    $mensagem = $_POST['txNews'];
    

    $stmt = $pdo->prepare("
        insert into tbNoticia values(
            null,
            '$desc',
            '$data',
            '$local',
            '$mensagem',
            '$caminhoI'
        )
    ");

    $stmt-> execute();

    header("location:consultarnoticia2.php");

?>