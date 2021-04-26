<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $conexao = conectar();
        // carregar o produto de código 2
        $produto = 2;
        $sql = "select * from imagens where cod_prod = $produto";
        $resultado = $conexao->query($sql);
        // considera que existe a pasta imagem dentro do diretório onde está este arquivo em php.
        $caminho= "imagens/";



        // pode ser que um produto tenha mais de uma imagem 
        // estão usarei o while para mostrar todas as imagens
        // carregando uma de cada vez



        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            // colocar na variavel o conteúdo do campo nomedoarquivo que está na tabela
            $arquivo = $registro["nomearquivo"];
            // testa se o nome corresponde a um arquivo, isto é opcional, ppois seu diretório so vai armazenar arquivos
                if (filetype(CAMINHO . $arquivo) === "file" ){
                   // determina o tipo do arquivo
                   $detectedType = image_type_to_mime_type(exif_imagetype(CAMINHO . $arquivo)); 
               // apenas arquivo de imagens serão utilizados 
               // opcional porque no diretório só será armazenado arquivo de imagem 
                   if($detectedType === "image/jpeg"){
                      echo  "<img src='" . CAMINHO . "$arquivo'  width='200px'/>";
                   }
                }
        }
        
        
        
        
        
        ?>
    </body>
</html>
