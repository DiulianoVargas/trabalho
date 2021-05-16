<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Cadastrar Funcionário</h1>
  <form class="form" action="" method="post">
    <div class="field">
      <label>Nome</label>
      <input type="text" name="first-name">
    </div>

    <div class="field">
      <label>Sobrenome</label>
      <input type="text" name="second-name">
    </div>

    <div class="field">
      <label>cpf</label>
      <input type="text" name="cpf">
    </div>

    <div class="field">
      <label>Idade</label>
      <input type="text" name="old">
    </div>

    <div class="field">
      <label>Especialidade</label>
      <input type="text" name="speciality">
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
      <button  type="reset">Limpar</button>
    </div>

  </form>

  <?php
      if(isset($_POST['send'])) {
        $first_name = $_POST['first-name'];
        $second_name = $_POST['second-name'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $old = $_POST['old'];
        $speciality =$_POST['speciality'];
        $phone = $_POST['phone'];

        echo "<script>alert('Nome: $first_name \\nSobrenome: $second_name \\nCPF: $cpf \\nE-mail: $email \\nIdade: $old \\nEspecialidade: $speciality \\nTelefone: $phone');</script>";
      }
    
  ?>
</body>

</html>