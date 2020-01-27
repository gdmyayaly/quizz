<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
    <ion-item>
        <ion-label>Prenom</ion-label>
        <ion-input name="username" type="text" id="prenom"></ion-input>
    </ion-item>
    <ion-item>
        <ion-label>Nom</ion-label>
        <ion-input name="password" type="password" id="password"></ion-input>
    </ion-item>
    <button type="submit" name="valider">Valider</button>
    </form>
    <?php
if (isset($_POST['valider'])) {
    

    $username=$_POST['username'];
    echo$username;
    $pass=$_POST['password'];
    echo$pass;
    if ($username=="admin" && $pass=="admin") {
        header('Location:dashboard.php');
    }
    else  {
        header('Location:index.php');
    }
}
    ?>
</body>
</html>