<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Veuillez saisir votre nom">
    </form>
    <br>
    <?php
        if(isset($_POST['name'])){
            echo 'Bienvenue Monsieur '.strtoupper($_POST['name']);
        }
    ?>
</body>
</html>