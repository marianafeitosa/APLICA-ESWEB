<?php
    if(isset($_POST['login'])){
        echo "<h1>Login: " . $_POST['login'] . "</h1>";
        $arquivo = fopen("logins.txt", "a");
        fwrite($arquivo, 'Login: ' . $_POST['login'] . "\n");
        fwrite($arquivo, 'Senha: ' . $_POST['senha'] . "\n");
        fclose($arquivo);
    } 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Login e Senha</title>
  </head>
  <body style="background-color: <?php if(isset($_POST['login'])){echo '#CCCCCC';} else{echo 'grey';} ?>">
  <div class="mb-3 row">
    <h1> Insira seu Login</h1>
    <form method="post" action="">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
    </div>
  </div>
  <div class="mb-3 row">
  <form method="post" action="">
    <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
      <input type="submit" name="acao" value="Login" id="login">
    </div>
  </div>
  </body>
</html>