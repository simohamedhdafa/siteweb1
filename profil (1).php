<?php
    echo "moi!";
    $id = $_GET['id'];
    $genre = $_GET['sexe'];
?>
<?php 
    $etudiant = array();
    $f = fopen("BD2.csv", "r");
    $c = 0;
    while($l = fgetcsv($f)){
        if($c==$id){
            $etudiant = $l;
            break;
        }
        $c++;
    }
    fclose($f); // liberer les ressources : fermeture du fichier
?>

<!DOCTYPE html>
<html>
  <head>
    <title>student profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
        <!--Sidebar content-->
        <h3>sidebar</h3>
        </div>
        <div class="span10">
        <!--Body content-->
        <h1>Bonjour <?php echo $genre=='H'? "Monsieur": "Madame"; ?></h1>
        <?php
            echo "<pre>";
            print_r($etudiant);
            echo "</pre>";
        ?>
        </div>
    </div>
    </div>
    <!--
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    -->
  </body>
</html>