<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de la multiplication par 3</title>
</head>
<body>
    <?php include_once("navbar.php"); ?>

    <main>
        <section>
            <header>
                <h1>La table de multiplication du 3</h1>
            </header>
            
            <?php
            // compute and print results
            for ($i=1; $i<=10; $i++){
                $result=3*$i;
                ?>
                <p>3 x <?=$i?> = <?=$result?></p>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>