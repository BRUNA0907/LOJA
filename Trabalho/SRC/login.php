<!DOCTYPE html>
<!--
EDITAR OS CAMPOS DO USUARIO TA TORTO!!!!!!!!

fAZER A QUESTAO DO FINALIZAR COMPRA!

<!--vdd -->

<html>
    <head>
        <meta charset="UTF-8">
        <title> Login </title>
    </head>
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
 
        <div class="w3-display-container w3-container">
    <img src="imagem/slog.jpg"   alt="sloogan" style=" padding-left: 10px;
    padding-right: 10px; width:100% !important ">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
        <h1 class="w3-jumbo w3-hide-small" style="padding: 10px 12px !important"> <b>LOGIN</b></h1>
      <h1 class="w3-hide-large w3-hide-medium">♥♥♥</h1>
      <h1 class="w3-hide-small" style="font-size: 20px !important">  ♥♥♥</h1>
      <p><a href="" class="w3-button w3-black w3-padding-large w3-large">Cadastro Powerfull♥</a></p>
    </div>
  </div>
          
            <form method="post" action="mandaBanco/conexão1.php">
                <fieldset class="alinha"><br>
                    <center>
                        <legend><h4> <b>Dados do cliente </b></h4></legend>   <br>                
                        <label style="padding: 30px;">Nome Completo  </label>         <br>                
                    <input  style="align-content: center; background-position: right;"  type=" text"  name="form_nome" value=""><br>
                    
                    <label  style="padding: 30px; ">Estado   </label>   <br>     
                    <input style="align-content: center; background-position: right;" type="text" name="form_Estado" value=""><br>
                   
                    <label  style="padding: 30px; ">Data de nascimento</label> <br>    
                    <input style="align-content: center; background-position: right;" type="date" name="" value=""><br>
                    
                    <label style="padding: 30px; ">Cidade</label> <br>    
                    <input style="align-content: center; background-position: right;" type="text" name="form_Cidade" value=""><br>
                   
                    <label style="padding: 30px; ">Bairro</label> <br>    
                    <input style="align-content: center; background-position: right;" type="text" name="form_Bairro" value=""><br>
                   
                    <label style="padding: 30px; ">Rua/Avenida</label> <br>    
                    <input style="align-content: center; background-position: right;" type="text" name="form_Rua" value=""><br>
                    
                    <label style="padding: 30px; ">CPF</label> <br>    
                     <input style="align-content: center; background-position: right;" type="text" name="form_CPF" value=""><br>
                     
                     <label  style="padding: 30px; ">CEP</label> <br>    
                     <input  style="align-content: center; background-position: right;" type="text" name="form_CEP" value=""><br>
                    
                     <label  style="padding: 30px; ">Número</label> <br>    
                     <input style="align-content: center; background-position: right;" type="text" name="form_numero" placeholder="Ex: 512" value=""><br>
                
                    
                   
                    <br>
                    <input class="w3-button w3-black w3-padding-large w3-large" style="align-content: center; background-position: right;" type="submit" value="Salvar" onclick="mensagem();" > 
                        </center>
            </fieldset>
                    
            </form>
        
          <h3> <p>
                  <a href="carrinho.php" class="w3-button w3-black w3-padding-large w3-large"> ◄ Carrinho </a> ☻☺ 
            <a href="index.php" class="w3-button w3-black w3-padding-large w3-large"> ♥ Powerfull Modas ♥</a> </p>
    </h3>
        
        
        <script>
        function mensagem(){
		alert("Compra efetuada!");
	}
       
        </script>
    </body>
</html>
