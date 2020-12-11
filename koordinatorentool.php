<?php
$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '');

if(!isset($_COOKIE['olli'])) {
    die('Bitte zuerst <a href="loginsite.php">einloggen</a>');
}
 

//$userid = $_COOKIE['olli']; 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Koordinatoren Tool</title>
        <link rel="stylesheet" href="./stylesheetEdit.css" type="text/css">
        <link rel="icon" href="/images/bmw_favicon.ico" type="image/vnd.microsoft.icon">
        <script src="/scripts/azubi.js" type="text/javascript"></script>
        <script src="/scripts/tableLoad.js" type="text/javascript"></script>
    </head>
    <!-- <script>
        
        let sortDirection = false;
        // let Abteilungsdaten = [ 
        //     { "name": "Sales Operations", "abteilung": "CS-41", "Ausbildungsberuf": "Iki", "Datum": "21.10.2020"},
        //     { name: "Programmierung Navigations-App", abteilung: "DE-391", Ausbildungsberuf: "FIFA", Datum: "22.10.2020"}
        // ];
        window.onload = () => {
            loadTableData(Abteilungsdaten);
        }
        function loadTableData(Abteilungsdaten) {
            const tableBody = document.getElementById('tableData');
            let dataHtml = "";
            for(let Abteilung of Abteilungsdaten) {
                dataHtml += `<tr class="tableRow">
                <td class="JobName">${Abteilung.kurzbeschreibung}</td>
                <td class="Abteilung">${Abteilung.abteilung}</td>
                <td class="Ausbildungsberuf">${Abteilung.berufsbezeichnung}</td>
                <td class="Datum">Verfübar ab ${Abteilung.besetztBis}</td>
            </tr>`;
            }
            tableBody.innerHTML = dataHtml;
            
        }
    </script> -->

    <body>
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
                        <h5 id="Title">Koordinatorenansicht</h5>
                        <a id="HomeLink" href="/edit/koordinatorentool.html">Home</a>
                        <a id="LoginLink" href=>Log Out</a>
                    </div>
                </div>
            </div>
            <div id="BannerUnderlay"></div>
        </header>
        <img id="AzubiFoto" src="/images/BMW-Careers-location-leipzig-apprentices-technical.jpg" alt="Azubis">
        <div class="Versetzungsfinder">
            <div class="VersetzungsfinderText">
                <div class="VersetzungsfinderTextWrapper">
                    <p id="Überschrift">Das BMW Versetzungsstellen-tool.</p>
                    <p id="Unterschrift">Von Azubis für Azubis.</p>
                    <p id="Text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   </p>
                </div>
            </div>
            <div class="Versetzungstool">
                <div class="VersetzungstoolWrapper">
                    <div class="Suchleiste">Suchleiste</div>
                    <div class="Filter">Filter</div>
                    <div class="Angebote">
                        <table class="TabelleAngebote">
                            <tbody id="tableData">
                                
                            </tbody>
                        </table>
                    </div> 
                    <div class="Filter">Filter</div> 
                </div>    
            </div>
        </div>
    </body>
</html>