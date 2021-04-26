<!DOCTYPE html>
<html>
    <head>
        <title>Novo Vendedor</title>
        <meta charset="UTF-8">
    </head>
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
    </style>
    <body class="w3-content" style="max-width:1200px"> <!-- menu tam -->

       <!-- Sidebar/menu -->
       <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:200px" id="mySidebar">
            <div class="w3-container w3-display-container w3-padding-16">
                <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
                <h3 class="w3-wide" ><b>Menu</b></h3>
            </div>

            <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
                <div>
                    <a href="administrador.php" class="w3-bar-item w3-button">Início</a>
                </div>
                <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                    Consultar <i class="fa fa-caret-down"></i>
                </a>
                <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                  <a href="consultarProdutos.php" class="w3-bar-item w3-button"> Produtos</a>
                  <a href="consultarVendedores.php" class="w3-bar-item w3-button">Vendedores</a>
                </div>

                <a onclick="myAccFunc1()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn1">
                    Cadastrar <i class="fa fa-caret-down"></i>
                </a>
                <div id="calças" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                    <a href="adicionarProdutos.php" class="w3-bar-item w3-button">Produtos</a>
                    <a href="cadastrarVendedor.php" class="w3-bar-item w3-button"> Vendedores</a>
                </div>
            </div>
       </nav>

       <!-- Top menu on small screens -->
       <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
            <div class="w3-bar-item w3-padding-24 w3-wide">Powerfull Modas</div>
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
              <p class="w3-left">Novo Vendedor</p>
              <p class="w3-right"></p>
            </header>

            <!-- Image header -->
            <!--<div class="w3-display-container w3-container">
                <img src="imagem/slog.jpg"   alt="sloogan" style=" padding-left: 10px;
                padding-right: 10px;;width:100% !important">
                <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
                    <!--<h1 class="w3-jumbo w3-hide-small" style="padding: 10px 12px !important">Store</h1>-->
                    <!--<h1 class="w3-hide-large w3-hide-medium">NOVA COLEÇÃO</h1>-->
                    <!--<h1 class="w3-hide-small" style="font-size: 20px !important">  Desde 2020</h1>-->
                    <!--<p><a href="#tênis" class="w3-button w3-black w3-padding-large w3-large">Confira!</a></p>-->
                <!--</div>
            </div>-->

           <div>
            
            
            <form action="salvarNovoVendedor.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Dados do Vendedor</legend><br><br> 
                    <label>Nome</label><br>
                    <input type="text" name="form_nome" value=""><br>
                    <label>CPF</label><br>
                    <input type="text" name="form_cpf" value=""><br>
                    
                    
                    <br><br>
                    <input type="submit" value="Salvar">
                    <br><br>
                </fieldset>
            </form>
        </div>
            
         <!-- End page content  
          © Copyright-->
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
    </body>
</html>