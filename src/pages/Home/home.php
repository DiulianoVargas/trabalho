<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="icon" href="../../assets/icon.svg">
  <title>ENTERPRISE</title>

  <link rel="stylesheet" type="text/css" href="../header.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../global-pages.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="home.css" media="screen" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap" rel="stylesheet">

</head>
<body>

  <header>
    <div class="title">
      <span>ENTERPRISE</span>
    </div>
    <div class="pages">
      <a href="home.php?pag=homepage">HOME</a>
      <a href="home.php?pag=clientepage">CLIENTE</a>
      <a href="home.php?pag=empresapage">EMPRESA</a>
      <a href="home.php?pag=funcionariopage">FUNCIONÁRIO</a>
    </div>
  </header>

  <section>
    <article>
      <?php
        $pag = isset($_GET['pag']) ? $_GET['pag'] : null;

        switch($pag) {
          case 'homepage': echo "<div class='container'><h1>HOME PAGE</h1></div>";
          break;

          case 'clientepage': include("../cliente/cliente.php");
          break;

          case 'empresapage': include("../empresa/empresa.php");
          break;

          case 'funcionariopage': include("../funcionario/funcionario.php");
          break;

          default: echo "<div class='container'><h1>HOME PAGE</h1></div>";
        }
      ?>
    </article>
  </section>
    
</body>
</html>