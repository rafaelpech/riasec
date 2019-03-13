document.addEventListener('DOMContentLoaded', function () {
    // Variables general
    var webroot = document.getElementById('webroot').value;
    var selectStates = document.getElementsByClassName('selectStates');
    // Get all states
    var xhttp = new XMLHttpRequest();
    // Save states on localstorage
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4) {
            localStorage.setItem("states", xhttp.responseText);
        }
    };
    // Rute for select all states
    xhttp.open('GET', webroot + 'estados');
    // Execute ajax xhttp for list states
    xhttp.send();
    // Get all locations
    var xhttpr = new XMLHttpRequest();
    // Save locations on localstorage
    xhttpr.onreadystatechange = function () {
        if (xhttpr.readyState == 4) {
            localStorage.setItem("locations", xhttpr.responseText);
        }
    };
    // Rute for select all locations
    xhttpr.open('GET', webroot + 'ubicaciones');
    // Execute ajax xhttp for list states
    xhttpr.send();
    // get states
    var states = JSON.parse(localStorage.getItem('states'));
    var locations = JSON.parse(localStorage.getItem('locations'));
    // Load states in view
    for (var i = 0; i < selectStates.length; i++) {
        const select = selectStates[i];
        for (var j = 0; j < states.length; j++) {
            const state = states[j];
            var option = document.createElement('option');
            var optionAttr = document.createAttribute('value');
            optionAttr.value = state.Cv_Estado;
            var txt = document.createTextNode(state.estado);
            option.setAttributeNode(optionAttr);
            option.appendChild(txt);
            select.appendChild(option);
        }

        select.addEventListener('change', function () {
            var selectMunicipalities = select.parentElement.parentElement.children[1].children[1];
            selectMunicipalities.innerHTML = `<option value="" disabled selected>Selecciona un municipio</option>`;
            for (var k = 0; k < locations.length; k++) {
                const location = locations[k];
                if (location.estado == select.value) {
                    var option = document.createElement('option');
                    var optionAttr = document.createAttribute('value');
                    optionAttr.value = location.id;
                    var txt = document.createTextNode(location.municipio);
                    option.setAttributeNode(optionAttr);
                    option.appendChild(txt);
                    selectMunicipalities.appendChild(option);
                }
            }
        });
    }
    // Form of register
    var btnEditCandidate = document.getElementById('btnEditCandidate');
    var formEditCandidate = document.getElementById('formEditCandidate');
    var errorEditCandidate = document.getElementById('errorEditCandidate');

    btnEditCandidate.addEventListener('click', function () {
        var errores = ``;

        if (formEditCandidate.nombre.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tu nombre</p>`;
        }

        if (formEditCandidate.apat.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tu apellido paterno</p>`;
        }
        if (formEditCandidate.amat.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tu apellido materno</p>`;
        }


        if (formEditCandidate.aspiranteState.value == null || formEditCandidate.aspiranteState.value == '') {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Selecciona tu estado</p>`;
        } else {
            if (formEditCandidate.aspiranteMunicipalities.value == null || formEditCandidate.aspiranteMunicipalities.value == '') {
                errores += `<p class="red-text text-darken-4 m-0 p-0">Selecciona tu municipio</p>`;
            }
        }

        if (errores == ``) {
            errorEditCandidate.classList.add('d-none');
            formEditCandidate.submit();
        } else {
            errorEditCandidate.innerHTML = errores;
            errorEditCandidate.classList.remove('d-none');
        }
    });
});