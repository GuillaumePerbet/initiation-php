<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Révisions</title>
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
                <h1>Révisions</h1>
            </header>

            <?php
            // checking submitted number
            if (isset($_POST["number"])){
                $number = $_POST["number"];
                // choosing a random number and calculating result
                $random=random_int(1,10);
                $result=$number*$random;
                ?>
                <!-- asking question -->
                <form action="" method="post">
                    <label for="answer">Résoudre <?=$number?> x <?=$random?> = </label>
                    <input type="text" name="answer" id="anwer">
                    <input type="hidden" name="result" id="result" value=<?=$result?>>
                    <input type="submit" value="Valider">
                </form>
            <?php
            }else{
                // checking submitted answer
                if (isset($_POST["result"])){
                    // checking answer
                    if ($_POST["answer"]==$_POST["result"]){
                    ?>
                        <p>Bonne réponse!</p>
                    <?php
                    }else{
                    ?>
                        <p>Mauvaise Réponse!</p>
                    <?php
                    }
                }
                ?>
                <!-- selecting table to practice -->
                <form action="" method="post">
                    <label for="number">Choisir la table à réviser :</label>
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
                    <input type="submit" value="Choisir">
                </form>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>