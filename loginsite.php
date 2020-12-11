<!-- Link to login.php -->
<?php 
require 'inc/login.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Login für Koordinatoren</title>  
    <link rel="stylesheet" href="./stylesheetLogin.css" type="text/css">
    <link rel="icon" href="/images/bmw_favicon.ico" type="image/vnd.microsoft.icon">
    <!-- Link to icon -->
    </head> 
    <header>
            <div class="Banner">
                <div class="BannerContent">
                    <div class="HeaderLogoBar">
                        <img id="HeaderLogo" class="HeaderLogoBMWGroup" src="/images/bmwgroup-logo.png" alt="BMWGroup Logo">
                        <img id="HeaderLogo" class="HeaderLogoNext" src="/images/signet.png" alt="Next100">
                        <img id="HeaderLogo" class="HeaderLogoBMW" src="/images/bmw-logo.png" alt="BMW Logo">
                        <img id="HeaderLogo" class="HeaderLogoMINI" src="/images/mini-logo.jpg" alt="MINI Logo">
                        <img id="HeaderLogo" class="HeaderLogoRR" src="/images/rollsroyce-logo.png" alt="RollsRoyce Logo">
                    </div>                    
                    <div class="Navigation">
                        <h5 id="Title">Versetzungstellen</h5>
                        <a id="HomeLink" href="/index.html">Home</a>
                        <a id="LoginLink" href="/loginsite.php">Log In</a>
                    </div>
                </div>
            </div>
            <div id="BannerUnderlay"></div>
        </header>
        <div class="picture"></div> <!-- Insert a different picture -->
        <body>

        <!-- Return of the error statement -->
        <?php 
        if(isset($errorMessage)) {
          echo $errorMessage;
        }
        ?>
        <div class="loginForm">
            <form action="?login=1" method="post">
                <div class = "loginText">E-Mail:<br></div>
                <input type="email" size="40" maxlength="250" name="email">
    
                <div class = "loginText">Passwort:<br></div>
                <input type="password" size="40"  maxlength="250" name="passwort">
    
                <input id = "SubmitButton" type = "submit" value = "Log In">
            </form> 
        </div>    
        </body>
</html>