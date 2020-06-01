<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Révisions Ajax</title>
</head>
<body>
    <?php include_once("navbar.php"); ?>
    
    <main>
        <section>
            <header>
                <h1>Super Révisions</h1>
            </header>

            <!-- print result and score-->
            <div>
                <p id="result"></p>
                <p id="score"></p>
            </div>

            <!-- ask question -->
            <form id="question">
                <label for="answer">Question state : résoudre random1 x random2 = </label>
                <input type="number" name="answer" id="anwer">
                <input type="submit" value="Valider">
            </form>

            <!-- replay -->
            <form id="finish" style="display: none;">
                <input type="submit" value="Recommencer">
            </form>

        </section>
    </main>

    <script src="superrevision.js"></script>
</body>
</html>