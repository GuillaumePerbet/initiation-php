<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super révisions</title>
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
                <h1>Super Révisions</h1>
            </header>

            <?php
            // setting state and score
            if (isset($_POST["state"])){
                $state = $_POST["state"]+1;
                $score = $_POST["score"];
                // checking answer
                if($_POST["answer"]==$_POST["result"]){
                    ?>
                    <p>Bonne réponse !</p>
                    <?php
                    $score++;
                }else{
                    ?>
                    <p>Mauvaise réponse !</p>
                <?php
                }
            }else{
                $state=0;
                $score=0;
            }
            ?>
            <p>Votre score : <?=$score?>/<?=$state?></p>

            <?php
            //revisoin end
            if ($state == 5){
                ?>
                <p>Terminé</p>
                
                <form action="" method="post">
                    <input type="submit" value="Recommencer">
                </form>
                <?php
            }else{
                // choosing 2 random numbers and calculating result
                $random1=random_int(1,10);
                $random2=random_int(1,10);
                $result=$random1*$random2;
                ?>
                <!-- asking question -->
                <form action="" method="post">
                    <label for="answer">Question <?=$state+1?> : résoudre <?=$random1?> x <?=$random2?> = </label>
                    <input type="text" name="answer" id="anwer">
                    <input type="hidden" name="result" id="result" value=<?=$result?>>
                    <input type="hidden" name="state" id="state" value=<?=$state?>>
                    <input type="hidden" name="score" id="score" value=<?=$score?>>
                    <input type="submit" value="Valider">
                </form>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>