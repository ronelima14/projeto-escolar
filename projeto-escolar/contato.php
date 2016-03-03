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
<div class="wrapper">    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        <form class="form-contact">
            <h1 class="text-center">Fale com a gente</h1>
            <div class="form-group">
                <label for="inputName">Nome</label>
                <input class="form-control" id="inputName" placeholder="Ex.: João Pedro da Silva">
                <small class="text-muted">Seu nome deve estar completo.</small>
            </div>
            <div class="form-group">
                <label for="inputEmail">E-mail</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                <small class="text-muted">Jamais compartilharemos seu e-mail com terceiros.</small>
            </div>
            <fieldset class="form-group">
                <label for="exampleSelect1">Assunto</label>
                <select class="form-control" id="select">
                  <option>-- Selecione um assunto --</option>
                  <option>Filmes</option>
                  <option>TV</option>
                  <option>Música</option>
                  <option>Lazer</option>
                  <option>HQ</option>
                  <option>Outro</option>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label for="exampleTextarea">Mensagem</label>
                <textarea class="form-control" id="textareaMessage" rows="3"></textarea>
            </fieldset>
            <div class="checkbox">
                <label><input type="checkbox"> Assinar newsletter</label>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
<?php
    @include "includes/footer.php";
?>
</div>
</body>
</html>