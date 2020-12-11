<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '');
 
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];

    $id = random_int(1000000, 999999999999999);

    $statement = $pdo->prepare("SELECT * FROM daten WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        setcookie("olli", $id);
        $_SESSION['userid'] = $user['id'];
        die('Login erfolgreich. Weiter zu <a href="koordinatorentool.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
    
}
?>