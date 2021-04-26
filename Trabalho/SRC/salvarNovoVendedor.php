<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
         if (isset($_POST["form_nome"]) &&
            isset($_POST["form_cpf"])
        ){
            $nome = $_POST["form_nome"];
            $cpf = $_POST["form_cpf"];
           
            
            $sql = "insert into vendedor"
                    . "(cpf_cnpj_vend, nome_vend)"
                    . "values ('$cpf','$nome')";
            try{
                $incluiu = $conexaoBD->query($sql); // realiza a operação de inclusão
                $conexaoBD = null;
            }
            catch (Exception $e){
                  header("Location:./erro.php?msgerro=" 
                          . erro_bd($e->getMessage()));             
            }  
         }
    header("Location: consultarVendedores.php");
    ?>
    </body>
</html>
