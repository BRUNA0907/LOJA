<?php
    if (isset($_POST["form_cpf"])){
        $codigo = $_POST["form_cpf"];
        $sqlUpdate = "delete from vendedor "
                . " where cpf_cnpj_vend = :cpf";
        $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
        $sqlPreparado = $conexaoBD->prepare($sqlUpdate);
        $sqlPreparado->bindParam(":cpf", $codigo);
        //iniciar uma transação atómica
        try{
            $conexaoBD->beginTransaction();
            $resultado = $sqlPreparado->execute();
            // efetivar a transação
            $conexaoBD->commit();
            $resultado = null;
            $sqlPreparado = null;
            $conexaoBD = null;
            header("Location:consultarVendedores.php");
        }
        catch (Exception $e){
         //$conexaoBD->roolback();
          header("Location:./erro.php?msgerro=" 
                  . erro_bd($e->getMessage()));
        }
    }
?>    
