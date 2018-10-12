<?php
require('outils.php');
?>

<!DOCTYPE html>     <!-- PAGE : MODELE.HTML -->



<html>



<head>

  <title>Sap2lux</title>

  <meta charset="utf-8" />





    <link href="../styles/styles.css"  rel="stylesheet" type="text/css" />
    <script language="javascript" src="fonction.js"></script>

</head>





<body>

    <?php
        try 
        {
            $bdd = new PDO('mysql:host=localhost;dbname=sap2lux;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur :' . $e -> getMessage());
        }
    ?>
       

    <!-- ******************************************************* -->

    <!--                 MENU                                    -->

    <!-- ******************************************************* -->

    

    <div id="titre">
    
      <?php

        afficheTitre();

      ?>   
    
    </div>

    <div id="menu">
    
      <?php

        afficheMenu();

      ?>   
    
    </div> <!-- fin menu -->

    

    <!-- ******************************************************* -->

    <!--                 CONTENU                                 -->

    <!-- ******************************************************* -->

    <div id="contenu">
    <h1>Homme</h1>
    <hr />
    </div> <!-- fin contenu -->

    <table>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
        </tr>
        
    <?php
        $reponse=$bdd->query('SELECT * FROM products');
        while ($nom = $reponse->fetch()){
        ?>
        <tr>
            <th><?php echo $nom['name']; ?></th>
            <th><?php echo $nom['unit_price']; ?></th>
            <th><?php echo $nom['description']; ?></th>
        </tr>
        
    
    <?php }?>
    </table>


         

    <!-- ******************************************************* -->

    <!--                 PIED DE PAGE                            -->

    <!-- ******************************************************* -->

    

    <footer>

      <?php

        afficheFooter();

      ?> 

    </footer> <!-- fin du pied de page -->





</body>



</html> 









