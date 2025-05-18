(() => {
    if (document.querySelector(".form-login")) {

        console.log('form-login');

        document.querySelector('.form-login').addEventListener('submit', function(e) {
            var passInput = document.getElementById('password');
            var hash = CryptoJS.SHA256(passInput.value).toString();
            passInput.value = hash;
        });
    }
})();