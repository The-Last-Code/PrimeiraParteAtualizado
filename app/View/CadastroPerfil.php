<?php

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/styleEdit.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cadastro</title>
    </head>
<body>
  <div class="container">
    <div class="title"><h2 class="titulo">Cadastro</h2></div>
    <div class="content">
      <form action="../Controllers/CadastroController.php" method="POST">
      <input type="hidden" name="acao" value="cadastraPerfil">   
        <div class="user-details">

          <div class="input-box">
            <span class="details">Area de atuação</span>
            <input name="nom_titulacao" type="text" placeholder="Area de atuação" required>
          </div>

          <div class="input-box">
            <span class="details">Titulação</span>
            <input name="nom_area_atuacao" type="text" placeholder="Area de atuação" required>
          </div>
           	
          <div class="input-box">
            <span class="details">Link do linkedin</span>
            <input name="end_rede_social" type="text" placeholder="Nome da titulação">
          </div>

          <div class="input-box">
            <span class="details">Data inicio - Formação</span>
            <input name="dti_formacao" type="date">
          </div>

          <div class="input-box">
            <span class="details">Data termino - Formação</span>
            <input name="dtt_formacao" type="date">
          </div>

          <div class="input-box">
            <span class="details" for="telefone">DDD</span>
            <input  type="text" name="ddd_telefone" id="telefone" placeholder="DDD" maxlength="15">
          </div>

          <div class="input-box">
            <span class="details" for="telefone">Numero de telefone</span>
            <input  type="text" name="num_telefone" id="telefone" placeholder="Digite um número de telefone" maxlength="15">
          </div>
          


          
        </div>
        <div class="button">
          <a href="./PaginaPerfil.php"><input type="submit" class="bt1" value="Cadastrar"></a>
          <a href="./PaginaPerfil.php"><input class="bt2" type="button" value="Voltar"></a>
        </div>
      </form>
    </div>
  </div>
  <script src="./script/app.js"></script>
</body>
</html>