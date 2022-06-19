document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('form');
    form.addEventListener('submit', sendForm);

    async function senfForm(e) {
        e.preventDefault();
        
        let error = formValidate(form);
    }

    function formValidate(form){
        let error = 0;
        let formReq = document.querySelectorAll('req');
    }
});