document.addEventListener('DOMContentLoaded', function(){
    
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);



    async function formSend(e) {
        e.preventDefault();
        let formData = new FormData(form);

        let response = await fetch('sendmail.php', {
            method: 'POST',
            body: formData
        });

        if(response.ok){
            let result = await response.json();
            alert(result.message);
            form.reset();
        }else{
            alert("Ошибка");
        }
    }
    /*
    async function senfForm(e) {
        e.preventDefault();
        
        let error = formValidate(form);
    }

    function formValidate(form){
        let error = 0;
        let formReq = document.querySelectorAll('req');
    }
    */
});