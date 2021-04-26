
<!-- 
******************
Carrinho: 
******************
imagem: 
- código_img
- nome_arquivo
- Codigo_produto

Compra: (NAO USARÁ)
- cpf_cnpj cliente
- cpf_cnpj trans
- cpf_cnpj vendedor
...

O CARRINHO PRECISA PUXAR:
ITEM COMPRA
PREÇO
IMAGEM
TRANSPORTADORA = CORREIO


Cadastrar imagem!!!!



Em seguida redirecionar o cliete para tela de login para efetuar sua compra.

*********************************** 27/11/2020*******************
MODIFICAÇÕES QUE FALTAM!
TABELA COMPRA
- CAIR O CÓDIGO DO FRETE(PAC) NO MYSQL(ID TRANSPORTADORA)
- FAZER O CÁLCULO DO TOTAL JÁ INCLUINDO O FRETE
- TIRAR O LUCRO DO VENDENDOR 
-
TABELA TRANSPORTADORA
- CAIR O CODIFGO DO PAC
-ID TRANSPORTADORA
-->
<html lang="PT-Portuguese">
    <head>
        <title>Carrinho</title>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Usei o jquery para aparecer na mesma tela a reposta-->
    <style>
img {
width: 205px!important;
height: 290px!important;
}
    
.w3-sidebar a {font-family: "Roboto", sans-serif;}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

.border{
     background-color:white;
    border-style: dashed dotted; /* estilos de borda diferentes para cima-baixo e esquerda-direita */
    border-color: #000 #090 #900 #009; 
    	border:20px inset #5d738b;
    padding:25px;
   margin-left: 100px;
   margin-right: 50px;

}

</style>
    <body class="w3-content border  " style="max-width:1200px" style="background-color:white" >
        
         <!-- Imagem slogan  -->
  <div class="w3-display-container w3-container">
    <img src="imagem/slog.jpg"   alt="sloogan" style=" padding-left: 10px;
    padding-right: 10px; width:100% !important ">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
        <h1 class="w3-jumbo w3-hide-small" style="padding: 10px 12px !important"> <b>CARRINHO</b></h1>
      <h1 class="w3-hide-large w3-hide-medium">♥♥♥</h1>
      <h1 class="w3-hide-small" style="font-size: 20px !important">  ♥♥♥</h1>
      <p><a href="" class="w3-button w3-black w3-padding-large w3-large">Carrinho Powerfull♥</a></p>
    </div>
  </div>
         <br><br><div class="page"> <h5>
    
<!-- Parte oara o calculo do frete-->       
<div class="panel-heading"> <b>Informe os dados para calcular o FRETE:</b></div> 
    <div style="height:50px ;"></div>
    
    <div class="form-group">
        <form>
  
             <label for="exampleInputEmail1">Calcular Frete:</label>
                
             <input type="text" class="form-control" name="cep" id="cep" placeholder="Seu cep">
                
                 <small class="form-text text-muted"><a href="https://buscacepinter.correios.com.br/app/endereco/index.php?t" target="_blank">Não sei meu CEP</a></small>
        </form>        
   
              </div>
    <div> 
        <button onclick="calculo();">Calcular: </button> 
     <button type="button" onclick=" localStorage.clear(); location.reload();"> Limpar </button>
    
   <div id="retorno"> </div> <!-- Retorna o valor-->
    </div> <!--FAZER O CALCULO DO FRETE! -->

</h5> 
             
</div>


<!--METODO limpa carrinho -->

         <!--<fieldset> 
<!-- total dA COMPRA-->
 <!--<h2>
    <br>
    Total:  </h2>
<div id="itens"> </div>
  </fieldset><div>
<span id="total"></span> </div>
   -->
<!-- ******************** Arrumar Script do Total!-->
<div>
    <fieldset>
    <?php
    session_start();
    ?>
   <?php
                    /*session_start();*/
                    if(!isset($_SESSION['itens'])){
                        $_SESSION['itens'] = array();
                    }
                    //se clicou no botao add carrinho
                    if(isset($_GET['add']) && $_GET['add'] == "carrinho"){
                        //Adiciona ao carrinho
                        $idProduto = $_GET['cod_prod'];
                        //se nao tiver produto daquele id adicionado, ele é quantidade 1, senao a quantidade aumenta
                        if(!isset($_SESSION['itens'][$idProduto])){
                            $_SESSION['itens'][$idProduto] = 1;
                        }else{
                            $_SESSION['itens'][$idProduto] += 1;
                        }
                    }
                    //Exibe o carrinho
                    if(count($_SESSION['itens']) == 0){
                        ?>
                            <h2>Carrinho vazio!!</h2>
                        <?php
                    }else{
                    ?>
                    <table>
                        <tr>
                            <!--<td class="edttd"></td>-->
                            <td class="alinhar">Código</td>
                            <td class="alinhar">Descrição</td>
                            <td class="alinhar">Quantidade</td>
                            <td class="alinhar">Valor</td>
                            <td class="alinhar">Valor Parcial</td>
                       
             
                         
                        </tr>
                        <br><br>
                        <?php
                     //    include_once './calcula.php'; 
                            $totalfinal=0;
                            $conexao = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
                            foreach($_SESSION['itens'] as $idProduto => $quantidade){
                                $select = $conexao->prepare("SELECT * FROM produto WHERE cod_prod=?");
                                $select->bindParam(1,$idProduto);
                                $select->execute();
                                $produtos = $select->fetchAll(); //para mostrar todos os produtos
                                $total =  $quantidade * $produtos[0]['valor_unitario'];
                                $totalfinal += $total ; //+ $frete->Valor ; 
                                
                        ?>
                        <tr>
                            <td><?php echo $produtos[0]['cod_prod'] ?></td><!--exibe cod prod -->
                            <td><?php echo $produtos[0]['nome_pro'] ?></td><!-- exibe nome prod -->
                            <td style="text-align: center;"><?php echo $quantidade ?></td> <!--exibe qtd. -->
                            <td>R$ <?php echo number_format($produtos[0]['valor_unitario'],2) ?></td> <!-- valor unit-->   
                            <td>R$ <?php echo number_format($total,2)?></td>  <!-- Total multiplicado-->
                   
                            <td>
                                <?php 
                                    echo '<a href="remover.php?remover=carrinho&cod_prod='.$idProduto.'"><button>Remover</button></a>'; ?>
                            </td> </tr>
                    <?php }                                                
                        echo '<tr> 
                                <td></td>
                                <td></td>
                                <td></td >
                          
                                    
                                <td><br><br><b>Preço Final</b></td>
                                <td><br><br>'. "R$   <span id='totalgeral'>".number_format($totalfinal,2).'</span></td>
                             </tr> ';?>    
                    </table>  <span style="color:white" id="totalinicial"><?= number_format($totalfinal,2);?> </span>                              
                    <?php }?>     
                     <p><a href="login.php" class="w3-button w3-black w3-padding-large w3-large">Comprar</a></p>
                  
    </fieldset>
   <?php
   
   $valorComissao = $totalfinal; // valor original
$percentual = 50.0/100; // 50%
$comissao = $percentual * $valorComissao;

   ?>
<br>
            </div>    
</div>
   <!-- -->





     <h3> <p><a href="index.php"class="w3-button w3-black w3-padding-large w3-large"> ◄ Voltar  ☻☺</a> </p></h3>
      <!--  <h3><p><a href="index.php"> ◄ Voltar </a> ☻☺  <!--<a href="login.php"> Finalizar ► </a> </p></h3>-->
        
<div>

<div class="w3-container w3-pink w3-padding-32">
    <h1></h1>
    <p></p>
    <p> Volte Sempre! ♥ </p>
  <!--  <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Mais sobre nós</button> -->
 </div>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contato:</h4>
        <p>Onde estamos?</p>
        <p> Atibaia - SP </p>
         
        
        <p><i class="fa fa-fw fa-phone"></i>(11)94116-8668</p>
        <p><i class="fa fa-fw fa-envelope"></i> powerfullmodas@hotmail.com</p>
      <!--  <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form> -->
      </div>

      <div class="w3-col s4">
        <h4 >Redes Sociais:</h4>
        <p> </p>
       <!-- <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Find store</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p> -->
        <p><i class="fa fa-facebook-official w3-hover-opacity w3-large"></i> PowerfullModas</p>
        <p><i class="fa fa-instagram w3-hover-opacity w3-large"></i> _Powerfull</p>
      </div>

      <div class="w3-col s4 w3-justify">
       
        <h4>Nós Aceitamos</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Boleto bancário</p>
        <p><i class="fa fa-fw fa-cc-amex"></i> Transferência bancária/p>
        <p><i class="fa fa-fw fa-credit-card"></i> Cartão de crédito</p>
        <br>
        
        
        <!-- <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i> -->
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24"> @copyright.  <a href="https://www.powerfull.com.br" title="powerfull" target="_blank" class="w3-hover-opacity"> © 2020 PowerfullModas. Todos os direitos reservados.
</a></div>

  <!-- End page content  
   © Copyright-->

</div>

<script> <!-- Função para pegar o código do correio na pagina calcula-->
      function calculo(){
    // document.getElementById("totalgeral").innerHTML = 1;
     
      
      
        var cep = $("#cep").val();
        $.post('calcula.php',{cep:cep},function(data){
          $("#retorno").html(data); 
      
        var total = document.getElementById("totalinicial").innerHTML;
      var frete =  document.getElementById("valorfrete").innerHTML;

        document.getElementById("totalgeral").innerHTML = parseFloat (total) + parseFloat (frete);
       
    });
    
        }
        
    </script>
        
    
    
    
    </body> 
 
    
       <div> <h3>♥Em construção...</h3></div>
</html>