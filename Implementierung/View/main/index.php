<?php

  require_once '../../Model/Database_Operations.php';
  require_once '../../Controller/MainShowcases.php';

 ?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
  <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8"/>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

  <script type="text/javascript" src="js/main.js"></script>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo text-element left">Maxxwell Computers</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="text-element" href="../main/index.php">Start</a></li>
          <li><a class="text-element" href="../contact/index.php">Kontakt</a></li>
          <li><a class="text-element" href="../login/index.php">Login</a></li>
          <li><a class="text-element" href="../register/index.php">Registrieren</a></li>

        </ul>
      </div>
    </nav>

    <div class="wrapper">
      <div id="main-container">
        <img class="center" id="main-logo" src="../img/logo/logo.png" alt="logo" width="150" height="150"></img>
        <div class="row">
          <div id="description">
            <h3>IT-Dienstleistungen & Business Hardware nach Bedarf</h3>
            <p>Maxxwell Computers bietet umfangreiche IT-Services und Leistungen an den Standorten Wien | Niederösterreich</p>
            <p>Wir bieten leistbare Business Hardware für den reibungslosen Ablauf von Geschäftsprozessen. Kunden profitieren von unserer Stellung als TOP Partner aller Namhaften Hardwarehersteller</p>
          </div>
        </div>
        <div id="heading">
          <h4>Letzte Projekte</h4>
        </div>
      <div class="row">
        <?php for($i = 0; $i < $res1['count(*)']; $i++)
        {
        $id = $showcase_assignment_id[$i];
        $det = $details[$i];
        include '../../Controller/GetShowcases.php';
        ?>
        <div class="col s3">
        <div class="showcase">
           <span class="showcase-content"><?php echo $l_name ?></span>
           <span class="showcase-content"><?php echo $l_desc ?></span>
           <span class="showcase-content"><?php echo $l_email ?></span>
           <span class="showcase-content"><?php echo $l_homepage ?></span>
        </div>
      </div>
    <?php } ?>
      </div>
    </div>

  </body>
</html>
