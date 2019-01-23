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
        <a href="#" class="brand-logo left">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../main/index.html">Start</a></li>
          <li><a href="../.html">Kontakt</a></li>
          <li><a href="collapsible.html">Login</a></li>
          <li><a href="collapsible.html">Registrieren</a></li>
        </ul>
      </div>
    </nav>

    <div class="wrapper">
      <div id="main-container">
      <img id="main-logo" src="https://via.placeholder.com/150"></img>
      <div class="row">
        <?php for($i = 0; $i < $res1['count(*)']; $i++)
        {
        $id = $showcase_assignment_id[$i];
        $det = $details[$i];
        include '../../Controller/GetShowcases.php';
        ?>
        <div class="col s3">
        <div class="showcase">
           <span class="showcase-content">Showcase <?php echo $i ?></span>
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
