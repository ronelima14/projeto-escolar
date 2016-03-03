<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmes-Em Breve</title>

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
    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        <!-- main -->
        <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        	<h1 class="title-news text-justify"><a href="filmes.php">Assista ao teaser de Convergente da série Divergente</a></h1>
            <iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12" height="400" src="https://www.youtube.com/embed/5vABDV63dmM" allowfullscreen></iframe>
            <p class="news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin orci mi, hendrerit at tellus eget, lacinia vehicula erat. Integer condimentum et tellus at auctor. Nam erat diam, commodo eu urna eu, accumsan scelerisque sem. Aenean eu orci nec mi porta vehicula nec ac velit. Suspendisse bibendum magna et elit varius, vel maximus quam viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vulputate mattis metus, vel ultrices enim consequat ac. Vivamus id tortor arcu. Cras vel viverra ligula, sit amet pretium justo. Integer pulvinar eu eros et pretium. Suspendisse non felis sit amet nulla facilisis ullamcorper in sit amet nisi. Maecenas sapien ante, euismod in lacus consectetur, vehicula tincidunt erat. Praesent interdum dignissim massa porta vestibulum. Ut blandit arcu ut ex aliquam pharetra.

In hendrerit mauris quis pharetra iaculis. Quisque arcu neque, suscipit ut erat id, tempus suscipit erat. Vestibulum condimentum at nibh blandit venenatis. Sed ultrices nibh nec tellus auctor convallis. Praesent a pellentesque turpis, id vehicula felis. Ut quis risus nec mauris elementum luctus sodales id purus. Pellentesque vestibulum arcu ut velit posuere, sit amet fringilla dui vestibulum. Sed sagittis orci odio, et tristique leo elementum vitae. Sed convallis justo risus, nec placerat tortor lacinia nec. Vestibulum auctor pretium tortor, et condimentum neque. Vivamus ut augue placerat, malesuada ex sed, ullamcorper nulla.

Mauris lacinia vestibulum vulputate. Nunc luctus, tellus in tristique volutpat, nisl ipsum luctus augue, nec vulputate nibh felis vitae felis. Proin id diam eget sem rutrum hendrerit sit amet vel justo. Suspendisse ultricies quam vitae convallis volutpat. Cras vitae arcu non mi posuere aliquam. Aenean vel felis interdum, consectetur diam aliquam, pulvinar ante. In magna erat, eleifend id nisi vitae, scelerisque pharetra tellus. Morbi fermentum velit neque, eget ullamcorper nisl interdum vitae. Nunc sed felis ipsum. Proin dolor nisl, aliquam non nulla vel, rutrum interdum sem. Integer dictum imperdiet metus, vitae tincidunt libero malesuada vitae.</p>
        </article>
        <aside class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="container related-container">
                <h2 class="text-center">Relacionados</h2>
            </div>
            <a href="filmes-em-cartaz.php"><img src="images/jogos-vorazes-poster4.jpg" alt="poster do filme Jogos Vorazes" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></a>
            <a href="filmes-em-cartaz.php"><h2 class="news">Em cartaz: Jogos Vorazes A Esperança-Parte Final</h2></a>
            
            <a href="filmes-noticias.php"> <img src="images/self-noticia-gde.jpg" alt="selfie noticias dos atores de Jogos Vorazes" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></a>
            <a href="filmes-noticias.php"><h2 class="news">Elenco da série Jogos Vorazes tiram selfie</h2></a>
            
            <a href="filmes-bilheterias.php"> <img src="images/pessoas-cinema.jpg" alt="Foto de pessoas assintindo ao cinema" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></a>
            <a href="filmes-bilheterias.php"> <h2 class="news">Saiba quais filmes estão sendo os mais vistos no Brasil e EUA</h2></a>
        </aside>
        <!-- TV -->
        
    </div>
<?php
    @include "includes/footer.php";
    @include "includes/scripts.php";
?>
</body>
</html>