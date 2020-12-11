<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '1w51kn1b');
?>

<!DOCTYPE html> 
<html> 
    <head>
    <title>Registrierung</title>    
    </head> 
        <body>
 
        <?php
        $showFormular = true;

        if(isset($_GET['register'])) {
            $error = false;
            $email = $_POST['email'];
            $passwort = $_POST['passwort'];
            $passwort2 = $_POST['passwort2'];
            $id = random_int(1000000, 999999999999999);

            setcookie("olli", $id);
            print_r($_COOKIE);
    
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
                $error = true;
            }     
            if(strlen($passwort) == 0) {
                echo 'Bitte ein Passwort angeben<br>';
                $error = true;
            }
            if($passwort != $passwort2) {
                echo 'Die Passwörter müssen übereinstimmen<br>';
            $error = true;
            }
    
            //Check if the entered emails is already been used
            if(!$error) { 
                $statement = $pdo->prepare("SELECT * FROM daten WHERE email = :email");
                $result = $statement->execute(array('email' => $email));
                $user = $statement->fetch();
        
            if($user !== false) {
                echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
                $error = true;
            }    
            }
    
            //No error --> registration of the new user
            if(!$error) {    
            $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
            $statement = $pdo->prepare("INSERT INTO daten (email, passwort, id) VALUES (:email, :passwort, :id)");
            $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'id' => $id));
        
            if($result) {        
                echo 'Du wurdest erfolgreich registriert. <a href="loginsite.php">Zum Login</a>';
                echo $passwort;
                $showFormular = false;
            } else {
                echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
                    }
                } 
            }
 
            if($showFormular) {
        ?>
 
        <form action="?register=1" method="post">
            <div class = "RegistrationText">E-Mail:<br></div>
                <div class = "RegistrationPanel"><input type="email" size="40" maxlength="250" name="email"><br><br></div>
 
            <div class = "RegistrationText">Dein Passwort:<br></div>
                <div class = "RegistrationPanel"><input type="password" size="40"  maxlength="250" name="passwort"><br></div>
 
            <div class = "RegistrationText">Passwort wiederholen:<br></div>
                <div class = "RegistrationPanel"><input type="password" size="40" maxlength="250" name="passwort2"><br><br></div>
 
            <input id = "SubmitButton" type = "submit" value = "Regestrieren">
        </form>
 
        <?php
            } //Ende von if($showFormular)
        ?>
 
        </body>
</html>