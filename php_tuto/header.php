<?php 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title><?php if(isset($title)){echo $title;}else{ echo "new pages";} ?></title>
    <link rel="stylesheet" href="">
  </head>

  <body>
  <h1><?php if(isset($msg)){echo $msg;}else{echo " RRRR";}?></h1> 
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-bottom">
      <a class="navbar-brand" href="#"><img src="<?php require 'logo.php'; ?>" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="jeu.php"> jeu </a>
          </li>
          <li class="nav-item <?php if($link === 'index'){echo $msg='active';} ?>" >
            <a class="nav-link" href="index.php">Accueil</a>
          </li> 
          <li class="nav-item <?php if($link === 'contact'):?>active<?php endif ?>">
            <a class="nav-link" href="contact.php">Contact</a>
          </li> 
          <li class="nav-item <?php if($link === 'inscrire'):?>active<?php endif; ?>">
            <a class="nav-link" href="insertion.php">s'inscrire</a>
          </li> 
      </div>
    </nav>

    <main role="main" class="container">