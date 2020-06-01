<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séléction de tables de multiplication</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Table du 3</a></li>
                <li><a href="select.php">Sélection de la table</a></li>
                <li><a href="checkbox.php">Afficher des tables</a></li>
                <li><a href="revision.php">Révisions</a></li>
                <li><a href="revisionajax.html">Révisions AJAX</a></li>
                <li><a href="superrevision.php">Super Révisions</a></li>
                <li><a href="superrevisionajax.html">Super Révisions AJAX</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <header>
                <h1>Sélection de tables de multiplication</h1>
            </header>
            
            <!-- form to select tables to print -->
            <section>
                <form action="checkbox.php" method="post">
                    <fieldset>
                        <legend>Choix des tables à afficher : </legend>
                            <?php
                            for ($i=1; $i<=10; $i++){
                            ?>
                                <!-- form checkboxes -->
                                <input type="checkbox" name=<?=$i?> id=<?=$i?> value=<?=$i?>/>
                                <label for=<?=$i?>><?=$i?></label>
                            <?php
                            }
                            ?>
                    </fieldset>
                    <input type="submit" value="Afficher">
                </form>
            </section>
            
            <?php
            for ($i=1; $i<=10; $i++){
                // checking submitted numbers
                if (isset($_POST[$i])){
                    ?>
                    <section>
                        <header>
                            <h2>Table de multiplication du <?=$i?></h2>
                        </header>
                    <?php
                        // calculting results
                        for ($j=1; $j<=10; $j++){
                            $result=$i*$j;
                        ?>
                            <!-- printing results -->
                            <p><?=$i?> x <?=$j?> = <?=$result?></p>
                        <?php
                        }
                        ?>
                    </section>
                <?php
                }
            }
            ?>
        </section>
    </main>
</body>
</html>