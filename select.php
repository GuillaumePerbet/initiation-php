<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection d'une table de multiplication</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Table du 3</a></li>
                <li><a href="select.php">Sélection de la table</a></li>
                <li><a href="checkbox.php">Afficher des tables</a></li>
                <li><a href="revision.php">Révisions</a></li>
                <li><a href="superrevision">Super Révisions</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <header>
                <h1>Choix d'une table de multiplication</h1>
            </header>
            
            <!-- form to select table to print -->
            <section>
                <form action="" method="post">
                    <label for="number">Choisir la table à afficher :</label>
                    <select name="number" id="number">
                        <?php
                        for ($i=1; $i<=10; $i++){
                        ?>
                            <!-- form options -->
                            <option value=<?= $i?>><?= $i?></option>
                        <?php
                        }
                        ?>
                    </select>
    
                    <input type="submit" value="Afficher">
                </form>
            </section>
            
            <?php
            // checking submitted number
            if (isset($_POST["number"])){
                $number = $_POST["number"];
                ?>
                <section>
                    <header>
                        <h2>Table de multiplication du <?=$number?></h2>
                    </header>
                <?php
                // calculating results
                for ($i=1; $i<=10; $i++){
                    $result=$number*$i;
                    ?>
                    <!-- printing result -->
                    <p><?= $number?> x <?= $i?> = <?= $result ?></p>
                <?php
                }
                ?>
                </section>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>