<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmes-Notícias</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        
        <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        	<h1 class="title-news text-justify">Elenco da série Jogos Vorazes tiram selfie</h1>
            <img src="images/self-noticia-gde.jpg" alt="Elenco do filme Jogos Vorazes tiram selfie" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img-responsive">
            <p class="news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin orci mi, hendrerit at tellus eget, lacinia vehicula erat. Integer condimentum et tellus at auctor. Nam erat diam, commodo eu urna eu, accumsan scelerisque sem. Aenean eu orci nec mi porta vehicula nec ac velit. Suspendisse bibendum magna et elit varius, vel maximus quam viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vulputate mattis metus, vel ultrices enim consequat ac. Vivamus id tortor arcu. Cras vel viverra ligula, sit amet pretium justo. Integer pulvinar eu eros et pretium. Suspendisse non felis sit amet nulla facilisis ullamcorper in sit amet nisi. Maecenas sapien ante, euismod in lacus consectetur, vehicula tincidunt erat. Praesent interdum dignissim massa porta vestibulum. Ut blandit arcu ut ex aliquam pharetra.

In hendrerit mauris quis pharetra iaculis. Quisque arcu neque, suscipit ut erat id, tempus suscipit erat. Vestibulum condimentum at nibh blandit venenatis. Sed ultrices nibh nec tellus auctor convallis. Praesent a pellentesque turpis, id vehicula felis. Ut quis risus nec mauris elementum luctus sodales id purus. Pellentesque vestibulum arcu ut velit posuere, sit amet fringilla dui vestibulum. Sed sagittis orci odio, et tristique leo elementum vitae. Sed convallis justo risus, nec placerat tortor lacinia nec. Vestibulum auctor pretium tortor, et condimentum neque. Vivamus ut augue placerat, malesuada ex sed, ullamcorper nulla.</p>
        </article>
        <aside class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="container related-container">
                <h2 class="text-center">Relacionados</h2>
            </div>
            <a href="filmes-bilheterias.php"><img src="images/pessoas-cinema.jpg" alt="Pessoas assitindo no cinema" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></a>
            <a href="filmes-bilheterias.php"> <h2 class="news">Saiba quais filmes estão sendo os mais vistos no Brasil e EUA</h2></a>
            
            <a href="filmes-em-breve.php"><img src="images/tris-convergente.jpg" alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></a>
        <a href="filmes-em-breve.php"><h2 class="news">Assista ao teaser de Convergente da série Divergente</h2></a>
            
            <a href="filmes-em-cartaz.php"><img src="images/jogos-vorazes-poster4.jpg" alt="poster do filme Jogos Vorazes" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></a>
            <a href="filmes-em-cartaz.php"><h2 class="news">Em cataz: Jogos Vorazes A Esperança-Parte Final</h2></a>
        </aside>
        <!-- TV -->
        
    </div>
<?php
    @include "includes/footer.php";
    @include "includes/scripts.php";
?>
</body>
</html>