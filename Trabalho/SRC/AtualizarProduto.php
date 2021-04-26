<?php
    if (
        isset($_POST["form_nome"]) && 
        isset($_POST["form_codProd"]) && 
        isset($_POST["form_descricao"]) && 
        isset($_POST["form_categoria"]) && 
        isset($_POST["form_peso"]) && 
        isset($_POST["form_dimensao"]) && 
        isset($_POST["form_quantidade"]) && 
        isset($_POST["form_valorUnitario"])
    ){
            $nome = $_POST["form_nome"];
            $codProd = $_POST["form_codProd"];
            $descricao = $_POST["form_descricao"];
            $idCategoria = $_POST["form_categoria"];
            $peso = $_POST["form_peso"];
            $dimensao = $_POST["form_dimensao"];
            $quantidade = $_POST["form_quantidade"];
            $valorUnitario = $_POST["form_valorUnitario"];
            
            $sqlUpdate = "update produto "
                    . "set nome_pro = :nome,"
                    . "descricao = :descricao,"
                    . "id_categoria = :id_categoria,"
                    . "peso = :peso,"
                    . "dimensoes = :dimensao,"
                    . "quantidade = :quantidade,"
                    . "valor_unitario= :valorUnitario"
                    . " where cod_prod = :codProd";
            
            $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
            $sqlPreparado = $conexaoBD->prepare($sqlUpdate);
            $sqlPreparado->bindParam(":nome", $nome);
            $sqlPreparado->bindParam(":codProd", $codProd);
            $sqlPreparado->bindParam(":descricao", $descricao);
            $sqlPreparado->bindParam(":id_categoria", $idCategoria);
            $sqlPreparado->bindParam(":peso", $peso);
            $sqlPreparado->bindParam(":dimensao", $dimensao);
            $sqlPreparado->bindParam(":quantidade", $quantidade);
            $sqlPreparado->bindParam(":valorUnitario", $valorUnitario);
            
            $conexaoBD->beginTransaction();
            $resultado = $sqlPreparado->execute();
            // efetivar a transação
            $conexaoBD->commit();
            $resultado = null;
            $sqlPreparado = null;
            $conexaoBD = null;
        }
        
    header("Location:consultarProdutos.php");
?>    
