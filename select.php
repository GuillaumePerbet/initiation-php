<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection d'une table de multiplication</title>
</head>
<body>
    <?php include_once("navbar.html"); ?>

    <main>
        <section>
            <header>
                <h1>Choix d'une table de multiplication</h1>
            </header>
            
            <!-- select table to print -->
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
            // check submitted number
            if (isset($_POST["number"])){
                $number = $_POST["number"];
                ?>
                <section>
                    <header>
                        <h2>Table de multiplication du <?=$number?></h2>
                    </header>
                <?php
                // compute and print results
                for ($i=1; $i<=10; $i++){
                    $result=$number*$i;
                    ?>
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