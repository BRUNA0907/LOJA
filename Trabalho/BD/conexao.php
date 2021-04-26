
<?php

/* 
LEVA AO BANCO DE DADOS DO MYSQL!!!!!!!!!!!!
 */
function conectar(){
	$dsn = "mysql:host=localhost;dbname=projetophp";
	$user = "root";
	$senha = "";
	$conn = new PDO($dsn,$user,$senha);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $conn;
}

Function erro_bd($erro) {
    $mensagem = $erro;
    if (stristr($erro,"primary")){
        $mensagem = "Atenção. Este registro já existe!";   
    }
    if (stristr($erro,"FOREIGN")){
        $mensagem = "Atenção. Outras informações "
                  . "dependem deste dado!";
    }
    return $mensagem;
}


