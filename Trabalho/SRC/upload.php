<?php
if (
        isset($_FILES["arquivo"]) &&
        isset($_GET["cod_prod"])
    ){
    //NESSE PONTO SIGNIFICA QUE FOI RECEBIDO O ARQUIVO E O CÓDIGO DO PRODUTO
    
    $erro = $_FILES["arquivo"]["error"];
    $codigo = $_GET["cod_prod"];
    
    //Testa se o Upload foi OK
    if ($erro == UPLOAD_ERR_OK){
        $nome_temporario = $_FILES["arquivo"]["tmp_name"];
        $nome_original = $_FILES["arquivo"]["name"];
        
        echo "nome temporario: $nome_temporario", "<br>";
        echo "nome original: $nome_original", "<br>";
        echo "nome adotado: $codigo-$nome_original", "<br>";
        
        //Nome do arquivo alterado para ser:  CODIGO-NOME_ORIGINAL
        move_uploaded_file($nome_temporario, "imagens/$codigo-$nome_original");
        
        //Armazena os dados na tabela de imagens do produto
        $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
        $conexaoBD->beginTransaction();

        $sql = "insert into imagem (nome_arquivo, codigo_prod) values 
            (:nome, :codigo)";
        $sqlPreparado = $conexaoBD->prepare($sql);

        $sqlPreparado->bindValue(":nome", $codigo."-".$nome_original);
        $sqlPreparado->bindValue(":codigo", $codigo);
        
        
        try {
            $resultado = $sqlPreparado->execute();        
            $conexaoBD->commit();            

        } catch (Exception $exc) {
            $conexaoBD->rollBack();
            echo "<br>Erro ao tentar salvar arquivo: <br><br>";
            echo erro_bd($exc->getMessage());
        }
        //INSTRUÇÃO PARA VOLTAR PARA A ÚLTIMA PÁGINA
        echo "<br><br><a href=\"editarProduto.php?cod_prod=$codigo\">Voltar</a>";
    }
    else{
        echo "Erro na recepção do arquivo.";
        echo "<a href=\"JavaScript: window.history.back();\">Voltar</a>";
    }
}
else{
    //NESSE PONTO NÃO RECEBEU TODAS AS INFORMAÇÕES NECESSÁRIAS
    echo "Não encontrei o arquivo";
    echo "<a href=\"JavaScript: window.history.back();\">Voltar</a>";    
}