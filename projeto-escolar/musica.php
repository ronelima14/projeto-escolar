<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Música - Só Entretenimento</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/music.css">
</head>
<body>
<div class="wrapper">    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        <!-- main -->
        <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="container music-container">
                <h1 class="text-center music-title">Música</h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 spaced">
                <a href="musica-KurtNirvana.php"><img src="images/musica-nirvana.jpg" alt="imagem da banda nirvana" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img-responsive"></a>
                <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-music-page text-justify">Kurt Cobain e Nirvana aparecem em fotos do primeiro show da banda</h2>
                <a href="musica-KurtNirvana.php"><p class="btn space-bottom col-xs-12 col-sm-12 col-md-3 col-lg-3 btn-default pull-right">leia mais</p></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 spaced">
                <a href="musica-lollapaloza.php"><img src="images/musica-lollapaloza.jpg" alt="imagem da Lollapaloza, um evento musical" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img-responsive"></a>
                <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-music-page text-justify">Sem saber da morte de Kurt, Nirvana cancelou show no Lolla há 20 anos</h2>
                <a href="musica-lollapaloza.php"><p class="btn space-bottom col-xs-12 col-sm-12 col-md-3 col-lg-3 btn-default pull-right">leia mais</p></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 spaced">
                <a href="musica-fireflight.php"><img src="images/musica-fireflight.jpg" alt="imagem da banda nirvana" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img-responsive"></a>
                <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-music-page text-justify">Fireflight - banda de rock gospel - começa a fazer sucesso mundialmente</h2>
                <a href="musica-fireflight.php"><p class="btn space-bottom col-xs-12 col-sm-12 col-md-3 col-lg-3 btn-default pull-right">leia mais</p></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 spaced">
                <a href="musica-metallica.php"><img src="images/musica-metallica.jpg" alt="imagem da banda nirvana" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img-responsive"></a>
                <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-music-page text-justify">Metallica anuncia para todos os fãs que está chegando ao fim</h2>
                <a href="musica-metallica.php"><p class="btn space-bottom col-xs-12 col-sm-12 col-md-3 col-lg-3 btn-default pull-right">leia mais</p></a>
            </div>
        </section>
        <!-- TV -->
        
    </div>
<?php
    @include "includes/footer.php";
    @include "includes/scripts.php";
?>
</div>
</body>
</html>