<?php
    
    include_once('./src/header.inc.php');
?>


<body>
    <header>
        <h1><?php print titre ?></h1>
    </header>
    <main>
        <div class="form" role="region">
            <fieldset>
                <legend>Poster vos publications</legend>
                <?php
                    //print $_SERVER['PHP_SELF'];
                ?>
                
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post"><!-- get -->
                <label for="titre">Saisir un titre</label>
                    <input type="text" name="titre" id="titre" placeholder="Votre titre" autofocus>
                    <label for="contenu">Insérer votre contenu</label>
                    <textarea name="contenu" id="contenu" placeholder="Contenu"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
                
               
            </fieldset>
            <!-- <a href="https://www.google.com/search?query=html+js+css">Cliquer</a> -->
         </div>
         <?php include_once('./src/traitement.inc.php')?>
    </main>
    <?php
        include_once('./src/footer.inc.php')
    ?>
    
</body>
</html>