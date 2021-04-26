<?php
    //* CÓDIGO PARA CALCULAR O FRETE DO CARRINHO COM O CORREIOS!!!!!!!
     //
    $cep_origem = "12940-481";     // Seu CEP (usei o de Atibaia)
    $cep_destino = $_POST['cep']; // CEP do cliente vai vir via POST


 # ###########################################
      # Código dos Principais Serviços dos Correios
      # 41106 PAC 
      # 40010 SEDEX 
      # 40045 SEDEX a Cobrar
      # 40215 SEDEX 10
      # ###########################################
 
    /* DADOS DO PRODUTO A SER ENVIADO (padronizado)*/
    $peso          = 2;
    $valor         = 100;
    $tipo_do_frete = '41106'; //Sedex: 40010   |  Pac: 41106
    $altura        = 10;
    $largura       = 30;
    $comprimento   = 30;

//peguei pelo pdf do site do correio:
    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "nCdEmpresa=";//isso é pra quem tem registro no correio = login
    $url .= "&sDsSenha=";// isso é pra quem tem registro no correio = senha
    $url .= "&sCepOrigem=" . $cep_origem; // concatenação para url
    $url .= "&sCepDestino=" . $cep_destino;
    $url .= "&nVlPeso=" . $peso;
    $url .= "&nVlLargura=" . $largura;
    $url .= "&nVlAltura=" . $altura;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" . $comprimento;
    $url .= "&sCdMaoProria=n";
    $url .= "&nVlValorDeclarado=" . $valor;
    $url .= "&sCdAvisoRecebimento=n";
    $url .= "&nCdServico=" . $tipo_do_frete;
    $url .= "&nVlDiametro=0";
    $url .= "&StrRetorno=xml";


    $xml = simplexml_load_file($url); // manda pra xml pra puxar o codigo do correio  

    $frete =  $xml->cServico;

    //mensagem para o usuário do frete e a data que chegará o produto:
    echo "<h3> Entrega pelo PAC: R$ <span id='valorfrete'> " .$frete->Valor." </span><br />Prazo: ".$frete->PrazoEntrega." dias úteis</h3>";

 ?>
