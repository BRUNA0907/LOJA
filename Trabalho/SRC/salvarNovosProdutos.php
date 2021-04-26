<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
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
            $categoria = $_POST["form_categoria"];
            $peso = $_POST["form_peso"];
            $dimensao = $_POST["form_dimensao"];
            $quantidade = $_POST["form_quantidade"];
            $valorUnitario = $_POST["form_valorUnitario"];
            
            $sql = "insert into produto"
                    . "(nome_pro, cod_prod, descricao, id_categoria, peso, dimensoes, quantidade,valor_unitario)"
                    . "values ('$nome','$codProd','$descricao','$categoria', '$peso', '$dimensao', '$quantidade', '$valorUnitario')";
            try{
                $incluiu = $conexaoBD->query($sql); // realiza a operação de inclusão
                $conexaoBD = null;
            }
            catch (Exception $e){
                  header("Location:./erro.php?msgerro=" 
                          . erro_bd($e->getMessage()));             
            }  
         }
    header("Location: consultarProdutos.php");
    ?>
    </body>
</html>
