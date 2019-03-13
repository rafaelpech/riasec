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
    var btnRegisterCandidate = document.getElementById('btnRegisterCandidate');
    var formRegisterCandidate = document.getElementById('formRegisterCandidate');
    var errorFormCandidate = document.getElementById('errorFormCandidate');

    btnRegisterCandidate.addEventListener('click', function () {
        var errores = ``;

        if (formRegisterCandidate.name.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tu nombre</p>`;
        }

        if (formRegisterCandidate.apat.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tu apellido paterno</p>`;
        }

        if (formRegisterCandidate.email.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tu correo electrónico</p>`;
        } else {
            if (!(/\S+@\S+\.\S+/.test(formRegisterCandidate.email.value))) {
                errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce un correo electrónico válido</p>`;
            }
        }

        if (formRegisterCandidate.upassword.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce una contraseña</p>`;
        } else {
            if (formRegisterCandidate.upassword.value.length <= 7 || formRegisterCandidate.upassword.value.length >= 30) {
                errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce una contraseña mayor de 7 carácteres y menos a 30 carácteres</p>`;
            } else {
                if (formRegisterCandidate.upassword.value != formRegisterCandidate.password.value) {
                    errores += `<p class="red-text text-darken-4 m-0 p-0">Las contraseñas no coinciden</p>`;
                }
            }
        }

        if (formRegisterCandidate.aspiranteState.value == null || formRegisterCandidate.aspiranteState.value == '') {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Selecciona tu estado</p>`;
        } else {
            if (formRegisterCandidate.aspiranteMunicipalities.value == null || formRegisterCandidate.aspiranteMunicipalities.value == '') {
                errores += `<p class="red-text text-darken-4 m-0 p-0">Selecciona tu municipio</p>`;
            }
        }

        if (errores == ``) {
            errorFormCandidate.classList.add('d-none');
            formRegisterCandidate.submit();
        } else {
            errorFormCandidate.innerHTML = errores;
            errorFormCandidate.classList.remove('d-none');
        }
    });
});

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
    var btnRegisterInstitute = document.getElementById('btnRegisterInstitute');
    var formRegisterInstitute = document.getElementById('formRegisterInstitute');
    var errorFormInstitute = document.getElementById('errorFormInstitute');

    btnRegisterInstitute.addEventListener('click', function () {
        var errores = ``;

        if (formRegisterInstitute.ngeneral.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce el no. general de la institución</p>`;
        }else{
            if(formRegisterInstitute.ngeneral.value.length > 25){
                errores += `<p class="red-text text-darken-4 m-0 p-0">El no. general ha sobrepasado 25 dígitos</p>`; 
            }
        }

        if (formRegisterInstitute.ninstitucion.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce el nombre de la institución</p>`;
        }else{
            if(formRegisterInstitute.ninstitucion.value.length > 40){
                errores += `<p class="red-text text-darken-4 m-0 p-0">El nombre de institución ha sobrepasado 40 dígitos</p>`; 
            }
        }

        if (formRegisterInstitute.email.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce un correo electrónico</p>`;
        } else {
            if (!(/\S+@\S+\.\S+/.test(formRegisterInstitute.email.value))) {
                errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce un correo electrónico válido</p>`;
            }
        }

        if (formRegisterInstitute.upassword.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce una contraseña</p>`;
        } else {
            if (formRegisterInstitute.upassword.value.length <= 7 || formRegisterInstitute.upassword.value.length >= 30) {
                errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce una contraseña mayor de 7 caracteres y menos a 30 caracteres</p>`;
            } else {
                if (formRegisterInstitute.upassword.value != formRegisterInstitute.password.value) {
                    errores += `<p class="red-text text-darken-4 m-0 p-0">Las contraseñas no coinciden</p>`;
                }
            }
        }

        if (formRegisterInstitute.instituteState.value == null || formRegisterInstitute.instituteState.value == '') {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Selecciona tu estado</p>`;
        } else {
            if (formRegisterInstitute.instituteMunicipalities.value == null || formRegisterInstitute.instituteMunicipalities.value == '') {
                errores += `<p class="red-text text-darken-4 m-0 p-0">Selecciona tu municipio</p>`;
            }
        }

        if (formRegisterInstitute.telefono.value.length != 10) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce un número telefónico válido (10 dígitos)</p>`;
        }
        if (formRegisterInstitute.correo.value.length <= 1 ) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce un correo electrónico de contacto</p>`;
        }else{
            if(formRegisterInstitute.correo.value.length >= 60){
                errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce un correo electrónico de contacto que no sobrepase 60 dígitos</p>`; 
            }
        }
        if (formRegisterInstitute.web.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce una página web</p>`;
        }else{
            if(formRegisterInstitute.web.value.length >= 50){
                errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce página web que no sobrepase 50 dígitos</p>`; 
            }
        }
        if (formRegisterInstitute.photo.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce una foto representativa</p>`;
        }

        if (errores == ``) {
            errorFormInstitute.classList.add('d-none');
            formRegisterInstitute.submit();
        } else {
            errorFormInstitute.innerHTML = errores;
            errorFormInstitute.classList.remove('d-none');
        }
    });
});

