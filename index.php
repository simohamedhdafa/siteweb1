<?php

    include_once("utils.php");
    $profils = select_from_csv(array("Nom", "Prenom", "photo"),
                            "csv/BD2.csv");

?>
<!DOCTYPE html>
<html>
  <head>
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <?php require_once("phpblocs/style.php"); ?>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <!--Sidebar content-->
                <?php // menu vertical ?>
                
                <ul class="nav nav-list">
                    <li class="nav-header">profils</li>
                    <?php //for($i=0; $i<count($profils); $i++) { ?>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Library</a></li>
                    <?php //} ?>
                </ul>
            </div>
            <div class="span9">
                <!--Body content-->
                <?php require_once("phpblocs/menu_horizontal.php") ?>
                    
                <?php // contenu ?>
            </div>
        </div>
    </div>
    <!--
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    -->
  </body>
</html>