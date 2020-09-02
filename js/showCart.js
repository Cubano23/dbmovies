
    const filmsCart = localStorage.getItem('films'); 
    const filmsCartData = JSON.parse(filmsCart);
    //console.log(filmsCartData[0])

    // Extract value from table header. 
    if(filmsCartData !== null){
    var col = [];
    for (var i = 0; i < filmsCartData.length; i++) {
        for (var key in filmsCartData[i]) {
            if (col.indexOf(key) === -1) {
                col.push(key);
            }
        }
    }
    // Create a table.
    var table = document.createElement("table");
    table.setAttribute('class', 'tableCart table-striped table-dark table');
    table.setAttribute('id','table_id')

    // Create table header row using the extracted headers above.
    var tr = table.insertRow(-1);                   // table row.

    for (var i = 0; i < col.length; i++) {
        var th = document.createElement("th"); 
        th.innerHTML = col[i];
        tr.appendChild(th);
    }

    // add json data to the table as rows.
    for (var i = 0; i < filmsCartData.length; i++) {

        tr = table.insertRow(-1);

        for (var j = 0; j < col.length; j++) {
            var tabCell = tr.insertCell(-1);
            tabCell.innerHTML = filmsCartData[i][col[j]];          
        }
        
    }

    // Now, add the newly created table with json data, to a container.
    var divShowData = document.getElementById('showCart');
    divShowData.innerHTML = "";
    divShowData.appendChild(table);
}
function deleteCart()
{
    localStorage.clear(); 
    location.reload();
}
function checkoutCart()
{ 
    if(filmsCartData == null)
    {
        alert("votre panier est vide");
        return;
    }
    else{
    let conf = confirm("Vous êtes sur le point de valider votre panier.");
    if (conf == true) {
        let str_json = JSON.stringify(filmsCartData);
        request= new XMLHttpRequest();
        request.open("POST", "../controller/BuyValidation.php", true);
        request.setRequestHeader("Content-type", "application/json");
        request.send(str_json);
        localStorage.clear(); 
        window.location = '../galerie/films.php';
    } else {
        return;
    }
    }
    

}
//addition de la colonne prix
if(table != null)
{
    table = document.getElementById('table_id');
    let rows = table.rows;
    let total = 0;
    let cell;
    for (let i=1, iLen=rows.length; i<iLen; i++) {
        cell = rows[i].cells[4];
        total += Number(cell.textContent || cell.innerText);
    }
    document.getElementById('total').innerHTML = 'Total panier: ' +  total.toFixed(2) + ' Euros';
}

    




