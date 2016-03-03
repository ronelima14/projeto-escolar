<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Só Entretenimento</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="bg-qs">
    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        <section>
            <div class="container qs-border text-center">
                <h1>Quem somos</h1>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Matheus de Almeida Martins</h3>
              </div>
              <div class="panel-body">
                <img src="images/musica-matheus.jpg" alt="Imagem de Matheus de Almeida Martins, gerente do projeto" class="col-xs-6 col-sm-4 col-md-3 col-lg-3 img-responsive img-circle personal">
                <p class=""><strong>Mini biografia:</strong></p>
                <p>Matheus é um cara muito tranquilo que não sabe muito bem o que quer da vida.</p>
                <p class=""><strong>Responsabilidade:</strong></p>
                <p>Gerente de projeto, categoria <a href="musica.php" class="link">Música</a></p>
                <a href="https://github.com/matheuswd">
                    <p class="btn btn-default"><img src="images/icone-github.png" alt="Ícone do Github" class="icons"> Github</p>
                </a>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Jonadab Ferreira da Silva</h3>
              </div>
              <div class="panel-body">
                <img src="images/jonadab.jpg" alt="Imagem de Jonadab Ferreira da Silva" class="col-xs-6 col-sm-4 col-md-3 col-lg-3 img-responsive img-circle personal">
                <p class=""><strong>Mini biografia:</strong></p>
                <p>Um cara que curte uma cerveja, um truco e odeia jogar na equipe do Matheus porque ele é muito chato.</p>
                <p class=""><strong>Responsabilidade:</strong></p>
                <p>Sessão de <a href="filmes.php" class="link">Filmes</a></p>
                <a href="https://github.com/Jonadab01">
                    <p class="btn btn-default"><img src="images/icone-github.png" alt="Ícone do Github" class="icons"> Github</p>
                </a>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">André Rafael Franco Collareda</h3>
              </div>
              <div class="panel-body">
                <img src="images/andre.jpg" alt="Imagem de André Rafael Franco Collareda" class="col-xs-6 col-sm-4 col-md-3 col-lg-3 img-responsive img-circle personal">
                <p class=""><strong>Mini biografia:</strong></p>
                <p>Um cara que gosta de ler, assistir filmes e séries, jogar, estudar, conhecer pessoas, escutar músicas e pensar (claro, não necessariamente nessa ordem).</p>
                <p class=""><strong>Responsabilidade:</strong></p>
                <p><a href="lazer.php" class="link">Lazer</a> e mapas do site</p>
                <a href="http://github.com/andrecollareda">
                    <p class="btn btn-default"><img src="images/icone-github.png" alt="Ícone do Github" class="icons"> Github</p>
                </a>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Rone Peterson Ferreira Lima</h3>
              </div>
              <div class="panel-body">
                <img src="images/rone.jpg" alt="Imagem de Rone Peterson Ferreira Lima" class="col-xs-6 col-sm-4 col-md-3 col-lg-3 img-responsive img-circle personal">
                <p class=""><strong>Mini biografia:</strong></p>
                <p>Rone é um pai de família, que curte fazer as lições de Práticas de Design.</p>
                <p class=""><strong>Responsabilidade:</strong></p>
                <p><a href="hqs.php" class="link">HQs</a> e Wireframes</p>
                <a href="http://github.com/matheuswd">
                    <p class="btn btn-default"><img src="images/icone-github.png" alt="Ícone do Github" class="icons"> Github</p>
                </a>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Elton Santos da Silva</h3>
              </div>
              <div class="panel-body">
                <img src="images/elton.jpg" alt="Imagem de Elton Santos da Silva" class="col-xs-6 col-sm-4 col-md-3 col-lg-3 img-responsive img-circle personal">
                <p class=""><strong>Mini biografia:</strong></p>
                <p>Elton é jogador de bola  semi-profissional, trabalha com projeto (projetista) e entrou pra TI esperando mudar de vida, ficar menos pobre.</p>
                <p class=""><strong>Responsabilidade:</strong></p>
                <p><a href="tv.php" class="link">TV</a> e Wireframes</p>
                <a href="http://github.com/Elton2015">
                    <p class="btn btn-default"><img src="images/icone-github.png" alt="Ícone do Github" class="icons"> Github</p>
                </a>
              </div>
            </div>
        </section>
    </div>
<?php
    @include "includes/footer.php";
?>
    </div>
</body>
</html>