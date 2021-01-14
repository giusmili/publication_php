<?php
     $test = "<strong>titre</strong>";
            
     //print htmlentities($test);
     //traitement des données à envoyer
     try{
         $bdd = new PDO('mysql:host=localhost;dbname=posts;charset=utf8','root','');

     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
     //tester nos variables
     if(isset($_POST['titre']) || isset($_POST['contenu'])){

         if(!$_POST['titre'] || !$_POST['contenu']){
             print "<p class=\"warning\">Vous avez oublié votre titre ou contenu</p>";
         }
         else if(is_numeric($_POST['titre'])){
             print "<p class=\"warning\">Vous devez saisir des caractères</p>";
         }
         else{
             $date_public = date('Y-m-d H:i:s'); //la date de création automatique
             $req = $bdd->prepare('INSERT INTO content(titre, contenu, date_creation)VALUES(?,?,?)');
             $req->execute(array(htmlentities($_POST['titre']), $_POST['contenu'], $date_public));

             echo "<p class=\"success\">Merci votre contenu est ajouté</p>";

         
         }
     
     }

?>