<?php
/**
 * User: Hans-Gert Gräbe
 * last update: 2018-10-14
 */

function pageHeader() {
  return '
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Leipzig Data Showroom"/>
    <meta name="author" content="Leipzig Data Project"/>

    <title>Leipzig Data Showroom</title>
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
            <li><a href="Energie-13">Energiekarte</a></li> 
            <!-- <li><a href="Jugendstadtplan">Jugendstadtplan</a></li> -->
            <li><a href="Gentri-14">Das Gentri-Projekt</a></li> 
            <!-- <li><a href="Event-Widget">Event-Widget</a></li> -->
            <li><a href="IHR-15">Interaktiver Haushalt</a></li> 
            <li><a href="MINT-15">MINT-Orte in Leipzig</a></li> 
            <li><a href="zd-web">Zukunftsdiplom</a></li> 
            <li><a href="NachhaltigesLeipzig">Nachhaltigkeit in Leipzig</a></li> 
          </ul>
        </div><!-- navbar end -->
      </div><!-- container end -->
    </nav>';
}

function generalContent() {
  return '
<div class="container">
  <h1 align="center">Showroom des Leipzig Data Projekts</h1>
</div>
';
}

function pageFooter() {
  return '

      <div class="container">
    <div class="footer">
        <p class="text-muted">&copy; <a href="http://leipzig-data.de">Leipzig Data Projekt</a> seit 2015 </p>
        <p class="text-left">Leipzig Data gehört zum <a href="http://leipzig-data.de/impressum/">Netzprojekt</a> an der Universität Leipzig, dessen <a href="http://leipzig-data.de/impressum/">Datenschutzregeln</a> auch hier Anwendung finden. </p>
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
  return pageHeader().generalContent().pageNavbar().($content).pageFooter();
}
