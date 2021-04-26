<?php
    if (isset($_POST["form_cod"])){
        $codigo = $_POST["form_cod"];
        $sqlUpdate = "delete from produto "
                . " where cod_prod = :codigoProduto";
        $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
        $sqlPreparado = $conexaoBD->prepare($sqlUpdate);
        $sqlPreparado->bindParam(":codigoProduto", $codigo);
        //iniciar uma transação atómica
        try{
            $conexaoBD->beginTransaction();
            $resultado = $sqlPreparado->execute();
            // efetivar a transação
            $conexaoBD->commit();
            $resultado = null;
            $sqlPreparado = null;
            $conexaoBD = null;
            header("Location:consultarProdutos.php");
        }
        catch (Exception $e){
         //$conexaoBD->roolback();
          header("Location:./erro.php?msgerro=" 
                  . erro_bd($e->getMessage()));
        }
    }
?>    
