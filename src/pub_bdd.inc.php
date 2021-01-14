<?php
try{ // On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=posts', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
    $reponse = $bdd->query('SELECT * FROM content ORDER BY date_modification DESC LIMIT 10');
    
    while($donnee = $reponse->fetch()){
        /*print "<pre>";
        print_r($donnee);
        print "</pre>";
        */
        echo '<article>
                <h2>'.$donnee['titre'].'</h2>
                <p>'.$donnee['contenu'].'</p>
                <time datetime="'.$donnee['date_modification'].'">Date de modification : '.$donnee['date_modification'].'</time>
            </article>';
        }
    
           $reponse->closeCursor(); 

    }
   
   
    //partie finale
catch(Exception $e){

die('Erreur : '.$e->getMessage());
}








?>


