<?php
/**
 * User: Hans-Gert Gräbe
 * Date: 2015-07-26
 */

function pageHeader() {
  return '
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Leipzig Data Demonstration Site"/>
    <meta name="author" content="Leipzig Data Project"/>

    <title>Leipzig Data Demonstration Site</title>
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
            <li><a href="events.php">Übersicht aktueller Events</a></li> 
            <li><a href="alteEvents.php">Übersicht vergangener Events</a></li> 
            <li><a href="mint-orte.php">MINT-Orte in Leipzig</a></li> 
            <!-- <li><a href="mint-personen.php">MINT-Personen in Leipzig</a></li> -->
            <li><a href="zukunftspass.php">Zukunftspass 2017</a></li> 
          </ul>
        </div><!-- navbar end -->
      </div><!-- container end -->
    </nav>';
}

function generalContent() {
  return '
<div class="container">
  <h1 align="center">Demonstations-Site des Leipzig Data Projekts</h1>
</div>
';
}

function pageFooter() {
  return '

      <div class="container">
    <div class="footer">
        <p class="text-muted">&copy; <a href="http://leipzig-data.de">Leipzig Data Projekt</a> 2015 </p>
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
