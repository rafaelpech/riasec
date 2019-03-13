document.addEventListener('DOMContentLoaded', function () {

    var metas = document.getElementsByTagName('meta');
    var webroot = document.getElementById('webroot').value;
    var btnLogin = document.getElementById('btnLogin');
    var formLogin = document.getElementById('formLogin');
    var errorFormLogin = document.getElementById('errorFormLogin');

    btnLogin.addEventListener('click', function () {
        var csrf = metas[3].attributes[1].value;
        errores = ``;

        if (formLogin.correo.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tú correo electrónico</p>`;
        }

        if (formLogin.upassword.value.length <= 1) {
            errores += `<p class="red-text text-darken-4 m-0 p-0">Introduce tú contraseña</p>`;
        }

        if (errores == ``) {
            errorFormLogin.classList.add('d-none');
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4) {
                    var error = JSON.parse(xhttp.responseText);

                    if (error.error != '') {
                        errores += `<p class="red-text text-darken-4 m-0 p-0">${error.error}</p>`;
                        errorFormLogin.innerHTML = errores;
                        errorFormLogin.classList.remove('d-none');
                    } else {
                        if (error.tipoAcceso == 'C') {
                            window.location.href = webroot + 'riasec';
                        } else if(error.tipoAcceso == 'I') {
                            window.location.href = webroot + 'Universidad';
                        }
                    }
                }
            }

            xhttp.open('POST', webroot + 'acceso');
            try {
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.setRequestHeader("X-CSRF-TOKEN", csrf);
            } catch (e) {
                console.log(e);
            }
            xhttp.send('correo=' + encodeURI(formLogin.correo.value) + '&upassword=' + encodeURI(formLogin.upassword.value));
        } else {
            errorFormLogin.innerHTML = errores;
            errorFormLogin.classList.remove('d-none');
        }
    });
});
