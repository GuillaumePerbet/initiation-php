<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Révisions</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>
    
    <main>
        <section class="container flex column center">
            <header>
                <h1>Révisions</h1>
            </header>

            <?php
            // check submitted number
            if (isset($_POST["number"])){
                $number = $_POST["number"];
                // choose random number and compute result
                $random=random_int(1,10);
                $result=$number*$random;
                ?>
                <!-- ask question -->
                <form action="" method="post" class="flex column center">
                    <div>
                        <label for="answer">Résoudre <?=$number?> x <?=$random?> = </label>
                        <input type="number" name="answer" id="anwer">
                    </div>
                    <input type="hidden" name="result" id="result" value=<?=$result?>>
                    <input type="submit" value="Valider">
                </form>
            <?php
            }else{
                // check submitted answer
                if (isset($_POST["result"])){
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
                <!-- select table to practice -->
                <form action="" method="post" class="flex column center">
                    <div>
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
                    </div>
                    <input type="submit" value="Choisir">
                </form>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>