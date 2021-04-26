<!--    CONEXÃO DO LOGIN!!!!!!!!!!!!!!!!!-->
<!--*****************************************-->


<?php
 include_once '../BD/conexao.php';

if (isset($_POST["form_nome"]) && 
    isset($_POST["form_Estado"]) &&
    isset($_POST["form_Cidade"]) && 
    isset($_POST["form_Bairro"]) &&
    isset($_POST["form_Rua"]) && 
    isset($_POST["form_CPF"]) &&
        isset($_POST["form_CEP"]) &&
            isset($_POST["form_numero"])){
            
    $nome = $_POST["form_nome"];
    $Estado = $_POST["form_Estado"];
    $Cidade = $_POST["form_Cidade"];
    $Bairro= $_POST["form_Bairro"];
    $Rua = $_POST["form_Rua"];
     $CPF = $_POST["form_CPF"];
      $CEP = $_POST["form_CEP"];
          $numero = $_POST["form_numero"];
 
    
    $sql = "insert into cliente"
            . "(cpf_cnpj_cli,nome_cli,numero_cli,bairro_cli,cidade_cli,cep_cli,estado_cli,endereco_cli) "
            . "values ('$CPF','$nome','$numero','$Bairro','$Cidade','$CEP','$Estado','$Rua')";
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
