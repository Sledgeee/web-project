"use strict"

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact__form');
    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();
        let error = formValidate(form);
        let formData = new FormData(form);


        if(error === 0) {
            let responce = await fetch('/assets/php/sendmail.php', {
                method: 'POST',
                body: formData
            });
            if(responce.ok) {
                let result = await responce.json();
                alert(result.message);
                form.reset();
            } else {
                alert('Error');
            }
        }
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for(let index = 0; index < formReq.length; index++) {
            const input = formReq[index];

            formRemoveError(input);

            if(input.value === '') {
                formAddError(input);
                error++;
            }
        }
        return error;
    }

    function formAddError(input) {
        input.parentElement.classList.add('error');
        input.classList.add('error');
    }

    function formRemoveError(input) {
        input.parentElement.classList.remove('error');
        input.classList.remove('error');
    }
});