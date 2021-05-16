<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1>Cadastrar Empresa</h1>
  <form class="form" action="" method="post">
    <div class="field">
      <label>Nome</label>
      <input type="text" name="first-name">
    </div>

    <div class="field">
      <label>Funcionários</label>
      <input type="text" name="worker">
    </div>
    
    <div class="field">
      <label>Vaga</label>
      <input type="text" name="empty">
    </div>

    <div class="field">
      <label>Email</label>
      <input type="email" name="email">
    </div>

     <div class="field">
      <label>Telefone</label>
      <input type="text" name="phone">
    </div>
    
    <div class="buttons">
      <button name="send">Enviar</button>
      <button type="clear">Limpar</button>
    </div>

  </form>  
  <?php
      if(isset($_POST['send'])) {
        $first_name = $_POST['first-name'];
        $worker = $_POST['worker'];
        $email = $_POST['email'];
        $empty = $_POST['empty'];
        $phone = $_POST['phone'];

        echo "<script>alert('Nome: $first_name \\nFuncionario: $worker\\nE-mail: $email \\nVaga: $empty \\nTelefone: $phone');</script>";
      }
    
  ?>
</body>
</html>