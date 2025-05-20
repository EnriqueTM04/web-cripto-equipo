(() => {
    if (document.querySelector(".form-sha")) {
        document.querySelector('.form-sha').addEventListener('submit', function(e) {
            var passInput = document.getElementById('password');
            var hash = CryptoJS.SHA256(passInput.value).toString();
            passInput.value = hash;

            var pwd = passInput.value;
            var error = validarPassword(pwd);
            if (error) {
                e.preventDefault();
                mostrarMensajeError(error);  
                return false;
            }          

            var passInput2 = document.getElementById('password_confirmation');
            var hash2 = CryptoJS.SHA256(passInput2.value).toString();
            passInput2.value = hash2;

        });
    }

    else if (document.querySelector(".form-sha-update")) {
        document.querySelector('.form-sha-update').addEventListener('submit', function(e) {
            var passInput = document.getElementById('update_password_current_password');
            var hash = CryptoJS.SHA256(passInput.value).toString();
            passInput.value = hash;

            var passInput2 = document.getElementById('update_password_password');
            var hash2 = CryptoJS.SHA256(passInput2.value).toString();
            passInput2.value = hash2;

            var pwd = passInput2.value;
            var error = validarPassword(pwd);
            if (error) {
                e.preventDefault();
                mostrarMensajeError(error);  
                return false;
            }
            
            var errorMessage = document.getElementById('error-message');
            errorMessage.innerHTML = "";
            errorMessage.style.display = 'none';

            var passInput3 = document.getElementById('update_password_password_confirmation');
            var hash3 = CryptoJS.SHA256(passInput3.value).toString();
            passInput3.value = hash3;
            
        });
    }

    function mostrarMensajeError(mensaje) {
        // mostrar el mensaje de error despues del formulario
            var errorMessage = document.createElement('div');
            errorMessage.innerHTML = mensaje;
            errorMessage.id = 'error-message';
            errorMessage.className = 'alert alert-danger';
            errorMessage.innerHTML = "";
            errorMessage.style.display = 'none';
            errorMessage.style.marginTop = '10px';
            errorMessage.style.marginBottom = '10px';
            errorMessage.style.textAlign = 'center';
            errorMessage.style.fontSize = '14px';
            errorMessage.style.fontWeight = 'bold';
            errorMessage.style.color = '#721c24';
            errorMessage.style.backgroundColor = '#f8d7da';
            errorMessage.style.borderColor = '#f5c6cb';
            errorMessage.style.padding = '10px';
            errorMessage.style.borderRadius = '5px';
    }


    function validarPassword(pwd) {
    if (pwd.length < 8) return "La contraseña debe tener al menos 8 caracteres.";
    if (!/[A-Z]/.test(pwd)) return "Debe contener al menos una letra mayúscula.";
    if (!/[a-z]/.test(pwd)) return "Debe contener al menos una letra minúscula.";
    if (!/[0-9]/.test(pwd)) return "Debe contener al menos un número.";
    if (!/[^a-zA-Z0-9]/.test(pwd)) return "Debe contener al menos un símbolo.";
    if (/(.)\1\1\1/.test(pwd)) return "No puede haber más de 3 caracteres iguales consecutivos.";
    return null;
}
})();