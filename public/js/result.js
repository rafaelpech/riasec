document.addEventListener("DOMContentLoaded", function () {
    var parameter1 = document.getElementById("user").value;
    var parameter2 = document.getElementById("alternative").value;
    var webroot = document.getElementById("webroot").value;
    var tableResult = document.getElementById("tbodyAlternatives");
    var btnAlternative1 = document.getElementById("alternative1");
    var btnAlternative2 = document.getElementById("alternative2");
    var btnAlternative3 = document.getElementById("alternative3");
    var btnAlternative4 = document.getElementById("alternative4");
    var btnAlternative5 = document.getElementById("alternative5");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            localStorage.setItem("alternative", xmlhttp.responseText);
        }
    };

    xmlhttp.open("GET", webroot + "alternativas/" + parameter1 + "/" + parameter2);

    xmlhttp.send();

    var alternativeOne = JSON.parse(localStorage.getItem("alternative"))[0];
    var alternativeTwo = JSON.parse(localStorage.getItem("alternative"))[1];
    var alternativeThree = JSON.parse(localStorage.getItem("alternative"))[2];
    var alternativeFour = JSON.parse(localStorage.getItem("alternative"))[3];
    var alternativeFive = JSON.parse(localStorage.getItem("alternative"))[4];

    btnAlternative1.addEventListener("click", function () {
        tbody = document.querySelector('#tableResult tbody')
        tbody.innerHTML = '';
        for (var i = 0; i < alternativeOne.length; i++) {
            var no = i + 1;
            var row = tbody.insertRow(i);
            var num = row.insertCell(0);
            var occupation = row.insertCell(1);
            var level = row.insertCell(2);
            var button = row.insertCell(3);
            occupation.innerHTML = '<strong>' + alternativeOne[i].Ocupacion + '</strong>';
            level.innerHTML = '<strong>' + alternativeOne[i].descripcion + '</strong>';
            num.innerHTML = '<strong>' + no + '</strong>';
            button.innerHTML = "<a class='btn btn-primary-next' role='button' href='" + webroot + "resultado/vermas/" + parameter1 + "/" + parameter2 + "/" + alternativeOne[i].Ocupacion + "'>Detalles</a>";
            tbody.appendChild(row);
        }
    });

    btnAlternative2.addEventListener("click", function () {
        tbody = document.querySelector('#tableResult tbody')
        tbody.innerHTML = '';
        for (var i = 0; i < alternativeTwo.length; i++) {
            var no = i + 1;
            var row = tbody.insertRow(i);
            var num = row.insertCell(0);
            var occupation = row.insertCell(1);
            var level = row.insertCell(2);
            var button = row.insertCell(3);
            occupation.innerHTML = '<strong>' + alternativeTwo[i].Ocupacion + '</strong>';
            level.innerHTML = '<strong>' + alternativeTwo[i].descripcion + '</strong>';
            num.innerHTML = '<strong>' + no + '</strong>';
            button.innerHTML = "<a class='btn btn-primary-next' role='button' href='" + webroot + "resultado/vermas/" + parameter1 + "/" + parameter2 + "/" + alternativeTwo[i].Ocupacion + "'>Detalles</a>";
            tbody.appendChild(row);
        }
    });

    btnAlternative3.addEventListener("click", function () {
        tbody = document.querySelector('#tableResult tbody')
        tbody.innerHTML = '';
        for (var i = 0; i < alternativeThree.length; i++) {
            var no = i + 1;
            var row = tbody.insertRow(i);
            var num = row.insertCell(0);
            var occupation = row.insertCell(1);
            var level = row.insertCell(2);
            var button = row.insertCell(3);
            occupation.innerHTML = '<strong>' + alternativeThree[i].Ocupacion + '</strong>';
            level.innerHTML = '<strong>' + alternativeThree[i].descripcion + '</strong>';
            num.innerHTML = '<strong>' + no + '</strong>';
            button.innerHTML = "<a class='btn btn-primary-next' role='button' href='" + webroot + "resultado/vermas/" + parameter1 + "/" + parameter2 + "/" + alternativeThree[i].Ocupacion + "'>Detalles</a>";
            tbody.appendChild(row);
        }
    });

    btnAlternative4.addEventListener("click", function () {
        tbody = document.querySelector('#tableResult tbody')
        tbody.innerHTML = '';
        for (var i = 0; i < alternativeFour.length; i++) {
            var no = i + 1;
            var row = tbody.insertRow(i);
            var num = row.insertCell(0);
            var occupation = row.insertCell(1);
            var level = row.insertCell(2);
            var button = row.insertCell(3);
            occupation.innerHTML = '<strong>' + alternativeFour[i].Ocupacion + '</strong>';
            level.innerHTML = '<strong>' + alternativeFour[i].descripcion + '</strong>';
            num.innerHTML = '<strong>' + no + '</strong>';
            button.innerHTML = "<a class='btn btn-primary-next' role='button' href='" + webroot + "resultado/vermas/" + parameter1 + "/" + parameter2 + "/" + alternativeFour[i].Ocupacion + "'>Detalles</a>";
            tbody.appendChild(row);
        }
    });

    btnAlternative5.addEventListener("click", function () {
        tbody = document.querySelector('#tableResult tbody')
        tbody.innerHTML = '';
        for (var i = 0; i < alternativeFive.length; i++) {
            var no = i + 1;
            var row = tbody.insertRow(i);
            var num = row.insertCell(0);
            var occupation = row.insertCell(1);
            var level = row.insertCell(2);
            var button = row.insertCell(3);
            occupation.innerHTML = '<strong>' + alternativeFive[i].Ocupacion + '</strong>';
            level.innerHTML = '<strong>' + alternativeFive[i].descripcion + '</strong>';
            num.innerHTML = '<strong>' + no + '</strong>';
            button.innerHTML = "<a class='btn btn-primary-next' role='button' href='" + webroot + "resultado/vermas/" + parameter1 + "/" + parameter2 + "/" + alternativeFive[i].Ocupacion + "'>Detalles</a>";
            tbody.appendChild(row);
        }
    });
});
