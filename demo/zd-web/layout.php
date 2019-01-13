<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2018-06-30
 * Last Update: 2019-01-13
 */

function pageHeader() {
  return '
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Leipziger Zukunftsdiplom 2019"/>
    <meta name="author" content="Leipzig Data Project"/>

    <title>Leipziger Zukunftsdiplom 2019</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    
  </head>
<!-- end header -->
  <body>

';
}

function pageNavbar() {
  return '

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Startseite</a></li> 
            <li><a href="teilnehmer.php">Teilnehmer</a></li> 
            <li><a href="events.php">Die Veranstaltungen</a></li> 
            <li><a href="akteure.php">Die Veranstalter</a></li> 
            <li><a href="orte.php">Die Veranstaltungsorte</a></li> 
            <li><a href="ranking.php">Ranking</a></li> 
          </ul>
        </div><!-- navbar end -->
      </div><!-- container end -->
    </nav>';
}

function generalContent() {
  return '
<div class="container">
  <h1 align="center">Leipziger Zukunftsdiplom 2019</h1>
</div>
';
}

function pageFooter() {
  return '

      <div class="container">
    <div class="footer">
        <p class="text-muted">&copy; <a href="https://zukunftsakademie-leipzig.de">Zukunftsakademie Leipzig e.V.</a> 2019 </p>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>';
}

function showPage($content) {
  return pageHeader().pageNavbar().generalContent().($content).pageFooter();
}

?>