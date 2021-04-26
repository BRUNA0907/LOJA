<!DOCTYPE html>
<html>
    <head>
        <title>Deletar Vendedor</title>
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
                <h3 class="w3-wide"><b>Menu</b></h3>
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
              <p class="w3-left">Dados do Vendedor</p>
              <p class="w3-right"></p>
            </header>

        <?php
         if ( ! isset($_GET["cpf_cnpj_vend"])){
            header("Location:index.php");
        }
        $cpf = $_GET["cpf_cnpj_vend"];
         $conexaoBD = new PDO('mysql:host=localhost;dbname=projetophp',"root","");
        $sql = "select * from vendedor where cpf_cnpj_vend = $cpf";
        // realiza a consulta ao banco de dados
        $resultado = $conexaoBD->query($sql);
        // converte o resultado em um vetor
        $registro = $resultado->fetch(PDO::FETCH_ASSOC);
        
        ?>
        <form action="EfetivaExclusaoVendedor.php" method="post">
               <fieldset>
                   <legend>Dados do Vendedor</legend>             
                   <label>CPF</label><br>         
                    <input readonly type="text" name="form_cpf" value="<?= $registro["cpf_cnpj_vend"] ?>"><br>
                    <label>Nome</label><br>
                    <input readonly type="text" name="form_nome" value="<?= $registro["nome_vend"] ?>"><br>
                    
                    <br>
                    <input type="submit" value="Excluir"/>
            </fieldset>
        </form>
        <a href="consultarVendedores.php"><button> Voltar </button> </a>

        <?php
        // libera o objeto de resultado da consulta
        $resultado = null;
        // remove a conexao com o banco de dados
        $conexaoBD = null;
        ?>
            
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