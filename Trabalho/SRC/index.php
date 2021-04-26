
<!DOCTYPE html>
<html>
   
<title>Catálogo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img {
width: 205px!important;
height: 290px!important;
}
    
.w3-sidebar a {font-family: "Roboto", sans-serif;}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
#imagem{
    position: absolute;
    width: 550px;
    height: 500px;
    margin: 100px auto; 
    /*background: rgba(0,0,255,1);*/
    margin-top: 0px;
    margin-left:0px;
   
}
</style>
<body class="w3-content" style="max-width:1200px" onload="imagem()"> <!-- menu tam -->

    <script language="JavaScript">
            function imagem ()	{
		var img1 = document.getElementById('img1');
		var img2 = document.getElementById('img8');
		img1.style.display="block";
		img2.style.display="";
		setTimeout("imagem2();", 1000);/*CHAMANDO A FUNÇÃO E QUANTOS SEGUNDOS PARA A IMAGEM PASSAR*/
            }
            function imagem2 ()	{
		var img1 = document.getElementById('img2');
		var img2 = document.getElementById('img1');
		img1.style.display="block";
		img2.style.display="";
		setTimeout("imagem3();", 1000);
            }					
            function imagem3 ()	{
                var img1 = document.getElementById('img3');
                var img2 = document.getElementById('img2');
                img1.style.display="block";
                img2.style.display="";
                setTimeout("imagem4();", 1000);
            }
            function imagem4 ()	{
                var img1 = document.getElementById('img4');
                var img2 = document.getElementById('img3');
                img1.style.display="block";
                img2.style.display="";
                setTimeout("imagem5();", 1000);
            }
            function imagem5 ()	{
		var img1 = document.getElementById('img5');
		var img2 = document.getElementById('img4');
		img1.style.display="block";
		img2.style.display="";
		setTimeout("imagem6();", 1000);
            }
            function imagem6 ()	{
		var img1 = document.getElementById('img6');
		var img2 = document.getElementById('img5');
		img1.style.display="block";
		img2.style.display="";
		setTimeout("imagem7();", 1000);
            }
            function imagem7 ()	{
		var img1 = document.getElementById('img7');
		var img2 = document.getElementById('img6');
		img1.style.display="block";
		img2.style.display="";
                setTimeout("imagem8();", 1000);
            }
            function imagem8 ()	{
		var img1 = document.getElementById('img8');
		var img2 = document.getElementById('img7');
		img1.style.display="block";
		img2.style.display="";
		setTimeout("imagem();", 1000);
            }
        </script>
   
    
    
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:200px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide " href="index.php"><b>Menu</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
          <b><a href="index.php" class="w3-bar-item w3-button">Powerfull Modas</a></b><br>
    <a href="#mule" class="w3-bar-item w3-button">Verão</a>
    <a href="#coturnoT" class="w3-bar-item w3-button">Inverno</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
    Tênis <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Tipos</a>
      <a href="prod_tenisChuck.php" class="w3-bar-item w3-button"> Tênis Chuck</a>
      <a href="prod_tenisCanoAlto.php" class="w3-bar-item w3-button">Tênis Cano Alto</a>
      <a href="prod_tenisSolaBaixa.php" class="w3-bar-item w3-button">Tênis Sola Baixa</a>
      <a href="prod_tenisAllStar.php" class="w3-bar-item w3-button">Tênis All Star</a>
    </div>
    
    <a onclick="myAccFunc1()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn1">
       Botas <i class="fa fa-caret-down"></i>
    </a>
    <div id="calças" class="w3-bar-block w3-hide w3-padding-large w3-medium">
 
     <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i> Tipos</a>
     <a href="prod_cotSolaAlta.php" class="w3-bar-item w3-button">Coturno Sola Alta</a>
     <a href="prod_cotSolaBaixa.php" class="w3-bar-item w3-button"> Coturno Sola Baixa</a>
     <a href="prod_btSalto.php" class="w3-bar-item w3-button">Botas com Salto</a>
    </div>
    <a href="prod_mule.php" class="w3-bar-item w3-button">Mule</a>
  <!--  <a href="#sapatilha" class="w3-bar-item w3-button">Sapatilha</a> -->
  <a href="prod_sandalia.php" class="w3-bar-item w3-button">Sandália</a>
<!-- <a href="#vestido" class="w3-bar-item w3-button">Vestidos</a>
     
     <a href="#conj" class="w3-bar-item w3-button">Conjuntos</a>
      <a href="#cinto" class="w3-bar-item w3-button">Cintos</a> -->
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contato</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Receba Noticias</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Sugestões</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Powerfull Modas
  
  </div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
 
 
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Vestuário</p>
    <p class="w3-right">
        
                <a href="carrinho.php"> <i class="fa fa-shopping-cart w3-margin-right"
        onclick="w3_close()" style="cursor:pointer"> Carrinho  </i> <!-- Carrinho-->
      </a>
        <a href="login.php"> Login </a>
     <!--  <i class="fa fa-search"></i> Busca  -->
    </p>
  </header>
 
  
  <div>
      <a href="administrador.php"><button>Administrador</button></a><br>
  </div><br>
  
  
  
  
  <!-- Image header -->
  <div class="w3-display-container w3-container">
      
    <img src="imagem/slog.jpg"   alt="sloogan" style=" padding-left: 10px;
    padding-right: 10px;;width:100% !important">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small" style="padding: 10px 12px !important">Store</h1>
      <h1 class="w3-hide-large w3-hide-medium">NOVA COLEÇÃO</h1>
      <h1 class="w3-hide-small" style="font-size: 20px !important">  Desde 2020</h1>
      <p><a href="#tênis" class="w3-button w3-black w3-padding-large w3-large">Confira!</a></p>
    </div>
  </div>

  
  <div class="w3-container w3-text-grey" id="tênis">
      
   <h1> Powerfull Modas </h1> 
  
   <div  style='color:red' style='font-size:50px'>
       <b>  <marquee  behavior="alternate" width="1150" eigth="50" scrollamount="15"
                        direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                        APROVEITE O PREÇO DA BLACK FRIDAY!
           </marquee></b>
   </div> 
 
     <div class="w3-display-container w3-container">
      
         <img src="imagem/bk.png"   alt="sloogan" style=" padding-left: 100px;
    padding-right: 20px;    border: 2px groove gray;
    border-radius: 20px;;width:100% !important">
  
  </div>

  </div> 
  <br><br>
  <!-- Second Photo Grid-->
  <div class="w3-row-padding"> <!--não apagar-->

  
  

  <!-- Subscribe section -->

  <div class="w3-container w3-pink w3-padding-32">
   
          <b><center> Mais sobre nós:</center></b>
      <p align=”Justify”> *Aqui você insere o texto 
    Powerfull modas é uma plataforma digital, no qual o cliente poderá
fazer sua compra de forma totalmente online, sem precisar sair do conforto
de sua casa, além de não precisar gastar com transporte ele não precisa se
locomover de um lugar para outro para comprar aquilo que ele deseja.

buscamos trazer o melhor para nossos clientes, com bom atendimento, praticidade,
produtos de qualidade e com preço que cabe no seu bolso.

Ao acessar nossa loja o cliente consegue fazer toda sua compra e pagamento 
através do próprio site sem precisar sair de casa para isso.
alem do mais, o cliente poderá comprar os produtos a qualquer hora, diferente
da loja fisica no qual a um tempo de funcionamento, e muitas vezes o cliente não tem 
tempo, devido a correria do dia, por conta do seu trabalho e etc.

Pensando nisso a Powerfull modas surgiu, para que voce consiga comprar aquilo que deseja com 
apenas um clique sem precisar sair de sua casa e gastando pouco.

Esperamos que goste! Seja bem vindo (a) e boas compras!! </p>
   <center><b>Entregamos para todo o Brasil ...</b></center>
  
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

  <div class="w3-black w3-center w3-padding-24"> @copyright.  <a href="https://www.pabrunemodas.com.br" title="pabrun" target="_blank" class="w3-hover-opacity"> © 2020 PowerfullModas. Todos os direitos reservados.
</a></div>

  <!-- End page content  
   © Copyright-->
</div> <!--não apagar-->

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">Receba Ofertas</h2>
      <p>Cadastre o seu email para receber as ofertas de primeira mão!</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Enviar</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "blusas" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();

function myAccFunc1() {
  var x = document.getElementById("calças");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Calças" link on page load to open the accordion for demo purposes
document.getElementById("myBtn1").click();




// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>


<script>//Aqui é a parte de add e somar carrinhp
	function AddCarrinho(produto, qtd, valor, posicao)
	{
		localStorage.setItem("produto" + posicao, produto);
		localStorage.setItem("qtd" + posicao, qtd);
		valor = valor * qtd;
		localStorage.setItem("valor" + posicao, valor);
		alert("Produto adicionado ao carrinho!");
	}
</script>
</body>

</html>
