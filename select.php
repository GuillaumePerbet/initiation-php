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
            <div class="elevation">
                <form action="" method="post" class="flex column center">
                    <div class="flex center margin">
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

                        <div class="select-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M7 10l5 5 5-5H7z"/></svg>
                        </div>
                    </div>
    
                    <input type="submit" value="Afficher">
                </form>
            </div>
            
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

    <script src="js/burger.js"></script>
</body>
</html>