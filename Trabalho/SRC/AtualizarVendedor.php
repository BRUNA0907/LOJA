<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if( isset($_POST["form_cpf"]) &&
                isset($_POST["form_nome"]))
            {
                $cpf = $_POST["form_cpf"];
                $nome = $_POST["form_nome"];

                $sqlUpdate = "update vendedor set nome_vend = :nome where cpf_cnpj_vend = :cpf;";
                $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
                $sqlPreparado = $conexaoBD->prepare($sqlUpdate);
                $sqlPreparado->bindParam(":cpf", $cpf);
                $sqlPreparado->bindParam(":nome", $nome);

                $conexaoBD->beginTransaction();
                $resultado = $sqlPreparado->execute();
                // efetivar a transação
                $conexaoBD->commit();
                $resultado = null;
                $sqlPreparado = null;
                $conexaoBD = null;
            }
            header("Location:consultarVendedores.php");

        ?>
    </body>
</html>