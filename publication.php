<?php
    include_once('./src/header.inc.php');
?>
<body>
    <header>
        <h1><?php print titre ?></h1>
    </header>
    <main>
        <?php
            include_once("./src/pub_bdd.inc.php");
        ?>
    </main>
    <?php
        include_once('./src/footer.inc.php')
    ?>
</body>
</html>