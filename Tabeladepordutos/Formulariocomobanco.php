<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro Banco de dados</title>
    
    <!--
     <script type="text/javascript">
        function mascara(telefone){ 
            if(txt_Telefone.value.length == 0)
                txt_Telefone.value = '(' + txt_Telefone.value; 
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') '; 
 
            if(telefone.value.length == 10)
                telefone.value = telefone.value + '-';
              }
    </script>
    -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      .titulo{
        padding-top: 20px;
        padding-left: 320px;
      }

    </style>
  </head>

  <body link="white" vlink="green">
    <form action = "incluir.php" method ="POST" class="form-horizontal">

<fieldset>

<!-- Form Name -->
<legend class="titulo" >Formulário de Cadastro de Carros</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_Nome">Codigo:</label>  
  <div class="col-md-4">
  <input id="codigo" name="codigo" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_Email">Produto:</label>  
  <div class="col-md-4">
  <input id="produto" name="produto" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_Endereco">Descrição:</label>  
  <div class="col-md-4">
  <textarea id="descricao" name="descricao" rows='3' cols="100" style="resize: none;"
  class="form-control input-md"></textarea>   
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_Cidade">Data:</label>  
  <div class="col-md-4">
  <input id="data" name="data" type="date" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_Telefone">Telefone:</label>  
  <div class="col-md-4">
      <input id="txt_Telefone" maxlength="15" name="txt_Telefone" type="tel" placeholder="" class="form-control input-md"
      onkeypress="mascara(this)">
  </div>
</div>
  -->

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_Login">Imagem:</label>
  <div class="col-md-4">
    <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- valor input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txt_Senha">Valor:</label>
  <div class="col-md-4">
    <input id="valor" name="valor" type="number" step="0.01" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_Enviar"></label>
  <div  align="center" class="col-md-4">
    <input style="width:390px" id="cadastrar" type="submit" name="cadastrar" value="Cadastar"class="btn btn-success">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="btn_Enviar"></label>
  <div  align="center" class="col-md-4">

    <input type="button" style="width:390px" onclick="window.location='_index.php'; " value="Voltar" class="btn btn-success"> 
    <!--
    <input type="button" style="width:390px" onclick="window.location='lista_de_dados.php'; " value="Lista de produtos" class="btn btn-success">  -->
  </div>
</div>

</fieldset>
</form>


    </form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>