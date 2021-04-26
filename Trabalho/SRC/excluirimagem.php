<?php
if (
        isset($_GET["imagem"]) &&
        isset($_GET["cod_prod"])
    ){
        $codigo = $_GET["cod_prod"];
        $arquivo = $_GET["imagem"];
        
        //TENTA APAGAR O ARQUIVO registrado no Banco de Dados
        $sql = "delete from imagem "
                . " where codigo_prod = :codigo_prod and nome_arquivo = :nome_arquivo";

        include_once 'Funcoes/bancoDeDados.php';
        $conexaoBD = conectar();
        $sqlPreparado = $conexaoBD->prepare($sql);

        $sqlPreparado->bindParam(":codigo_prod", $codigo);
        $sqlPreparado->bindParam(":nome_arquivo", $arquivo);

        try{
            $conexaoBD->beginTransaction();
            $resultado = $sqlPreparado->execute();

            // efetivar a transação
            $conexaoBD->commit();
            
            //Apaga o arquivo
            unlink("./imagens/".$arquivo);
            echo "Arquivo $arquivo foi excluído com sucesso.<br><br>";
        }
        catch (Exception $e){
            $conexaoBD->roolback();
            echo "Erros. Impossível excluir a imagem atrelada ao produto.";
            echo erro_bd($exc->getMessage());
        }
        
        //INSTRUÇÃO PARA VOLTAR PARA A ÚLTIMA PÁGINA
        echo "<br><br><a href=\"editarProduto.php?cod_prod=$codigo\">Voltar</a>";
    }
    else{
        echo "Erro na exclusão do arquivo.";
        echo "<br><br><a href=\"JavaScript: window.history.back();\">Voltar</a>";
    }