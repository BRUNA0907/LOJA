<?php

session_start();
include_once './conexao.php';
//Verificar se o usuÃ¡rio clicou no botÃ£o, clicou no botÃ£o acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    //Receber os dados do formulÃ¡rio
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nome_imagem = $_FILES['imagem']['name'];
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $result_img = "INSERT INTO imagens (nome, imagem) VALUES (:nome, :imagem)";
    $insert_msg = $retorno->prepare($result_img);
    $insert_msg->bindParam(':nome', $nome);
    $insert_msg->bindParam(':imagem', $nome_imagem);

    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar Ãºltimo ID inserido no banco de dados
        $ultimo_id = $retorno->lastInsertId();

        //DiretÃ³rio onde o arquivo vai ser salvo
        $diretorio = 'imagens/' . $ultimo_id.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nome_imagem)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
            header("Location: index.php");
        }        
    }
    else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: index.php");
    }
    
} else {
    $_SESSION['msg'] = "<p style='color:black;'>Erro ao salvar os dados</p>";
    header("Location: index.php");
}

