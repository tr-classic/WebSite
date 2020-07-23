<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tomb Raider Classic</title>

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

    <link rel="stylesheet" href="/src/lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">

    <script src="/src/lib/JQuery-3.4.1/JQuery.min.js"></script>
    <script src="/src/lib/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/src/lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="/src/lib/ThreeJS/three.min.js"></script>
    <script src="/src/lib/ThreeJS/OBJLoader.min.js"></script>

    <style>
      body{
        height:100vh;
        background-color: #222 ;
        color: #ccc ;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="#">TRC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link <?= ($GLOBALS['PAGE'] == "home") ? "active" : "" ?>" href="home">Home</a>
          <a class="nav-item nav-link <?= ($GLOBALS['PAGE'] == "project") ? "active" : "" ?>" href="project">Project</a>
        </div>
      </div>
    </nav>
    <?php
    RenderBody() ;
     ?>
    <?php
    if(isset($Script))
      echo $Script ;
     ?>
  </body>
</html>
