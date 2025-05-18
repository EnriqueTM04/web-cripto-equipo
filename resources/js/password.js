(() => {
    if (document.querySelector(".form-sha")) {
        document.querySelector('.form-sha').addEventListener('submit', function(e) {
            var passInput = document.getElementById('password');
            var hash = CryptoJS.SHA256(passInput.value).toString();
            passInput.value = hash;

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

            var passInput3 = document.getElementById('update_password_password_confirmation');
            var hash3 = CryptoJS.SHA256(passInput3.value).toString();
            passInput3.value = hash3;
            
        });
    }
})();