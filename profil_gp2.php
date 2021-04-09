<?php
    $id = $_GET['e'];
    $genre = trim(trim($_GET['c']), ';');

    $etudiant = array();
    $f = fopen("BD2.csv", "r");
    $count = 0;
    while($ligne = fgetcsv($f)){
        if($id==$count){
            $etudiant = $ligne;
            break;
        }
        $count += 1;
    }
    fclose($f);
?>

<?php  
 /* 
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    echo $genre;
*/
?>

<html>
  <head>
    <title>Etudiants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
            <!--Sidebar content-->
            </div>
            <div class="span6">
            <!--Body content-->
            <h1>Bonjour <?php echo $genre=='H'? "Monsieur" : "Madame" ?></h1>
            
            <?php 
                echo "<img src=\"".$etudiant[7]."\" height=70 width=70>";
            ?>
            
            NOM COMPLET: <?php echo $etudiant[0]." ".$etudiant[1]; ?>
            <br>
            DATE DE NAISSANCE: <?php echo $etudiant[2]; ?>
            <br>
            BAC: <?php echo $etudiant[6]; ?>

            </div>
        </div>
        </div>
    </div>
    <!--
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    -->
  </body>
</html>