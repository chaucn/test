
window.onload = () => {
    loadTableData(Abteilungsdaten);
}

function loadTableData(Abteilungsdaten) {
    const tableBody = document.getElementById('tableData');
    let dataHtml = "";

    for(let Abteilung of Abteilungsdaten) {
        dataHtml += `<tr class="tableRow" onClick="openInfo(${Abteilung.id});">
        <td class="JobName">${Abteilung.kurzbeschreibung}</td>
        <td class="Abteilung">${Abteilung.abteilung}</td>
        <td class="Ausbildungsberuf">${Abteilung.berufsbezeichnung}</td>
        <td class="Datum">Verfübar ab ${Abteilung.besetztBis}</td>
        <td id="testButton">&#10093</td>
        
        <div id="myModal${Abteilung.id}" class="modal">
        <div class="modal-content">
            <span id="close${Abteilung.id}" class="close">&times;</span>
            <div id="gradient"></div>
            <div class="modalText">
                <h1>${Abteilung.kurzbeschreibung}</h1>
                <h2>Abteilung: ${Abteilung.abteilung}</h2>
                <h2>Ausbildungsberuf: ${Abteilung.berufsbezeichnung}</h2>
                <h2>Verfügbar ab: ${Abteilung.besetztBis}</h2>
                <h3>Schwerpunkte</h3>
                <p>${Abteilung.schwerpunkte}</p>
            </div>
        </div>
        </div>
        </tr>`;
    }

    tableBody.innerHTML = dataHtml;

}

// function createSubpages(Abteilungsdaten) {
//     for(i=0; i <Abteilungsdaten.length;i++){
//         var doc = document.implementation.createHTMLDocument(Abteilungsdaten[i].id)
//         doc.body.append('Hello World!');
//         console.log(doc);
//     }
// }

//function to make the modal visible
function openButton(modal) {
    modal.style.display = "block";
    };



function openInfo(id){
    
    
    var modal = document.getElementById("myModal"+id);

    // Get the button that opens the modal
    // var btn = document.getElementById("Button"+id);

    // Get the <span> element that closes the modal
    var span = document.getElementById("close"+id);

   

    // When the user clicks on the button, open the modal
    openButton(modal);

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    };
    
}


