<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Sélection d'une table de multiplication</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>

    <main>
        <section class="container flex column center">
            <header>
                <h1>Choix d'une table de multiplication</h1>
            </header>
            
            <!-- select table to print -->
            <section>
                <form action="" method="post" class="flex column center">
                    <div>
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
                    </div>
    
                    <input type="submit" value="Afficher">
                </form>
            </section>
            
            <?php
            // check submitted number
            if (isset($_POST["number"])){
                $number = $_POST["number"];
                ?>
                <section class="table">
                    <header>
                        <h2>Table du <?=$number?></h2>
                    </header>

                    <ol>
                        <?php
                        // compute and print results
                        for ($i=1; $i<=10; $i++){
                            $result=$number*$i;
                            ?>
                            <li><?= $number?> x <?= $i?> = <?= $result ?></li>
                        <?php
                        }
                        ?>
                    </ol>
                </section>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>