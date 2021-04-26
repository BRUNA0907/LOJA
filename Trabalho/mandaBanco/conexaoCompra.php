<?php

//conectar os dados da compra
// frete; valor da compra; data; numero da cmpra, cpf cliente e comissao! 
//
//
 include_once '../BD/conexao.php';

 include_once './calcula.php';
 
if (isset($_POST["form_CPF"]) && 
    isset($_POST[""]) &&
    isset($_POST[""]) && 
    isset($_POST[""]) &&
  
            isset($_POST[""])){
            
    $CPF = $_POST["form_CPF"];
    $data = $_POST[""];
    $numerocompra = $_POST[""];
    $comissao= $_POST[""];
    $frete = $_POST[""];
  
 
    
    $sql = "insert into compra"
            . "(cpf_cnpj_cli,data,numero_compra,valor_comissao,valor_transporte) "
            . "values ('$CPF','$data','$numerocompra','$comissao','$frete)";
    $conexaoBD = conectar();
    try{
        $incluiu = $conexaoBD->query($sql); // realiza a operação de inclusão
        $conexaoBD = null;
        echo "<h1>CADASTRO REALIZADO!<h1>";
         
    }
    catch (Exception $e){
          header("Location:./erro.php?msgerro=" 
                  . erro_bd($e->getMessage()));
    }
   
}

header("Location: ../index.php");

?>

