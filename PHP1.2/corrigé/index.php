<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="welcome.php" method="POST">
        <div class="form-control">
            <label for="fname">Prénom :</label>
            <input type="text" name="fname" id="fname">
        </div>

        <div class="form-control">
            <label for="lname">Nom de Famille :</label>
            <input type="text" name="lname" id="lname">
        </div>

        <div class="form-control">
            <label for="email">Votre email :</label>
            <input type="email" name="email" id="email">
        </div>
        
        <div class="form-control">
            <label for="pwd">Mot de passe :</label>
            <input type="password" name="pwd" id="pwd">
        </div>

        <button type="submit">Envoyer</button>
        <button type="reset">Réinitialiser</button>
    </form>
</body>

</html>