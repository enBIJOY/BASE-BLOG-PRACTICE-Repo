document.addEventListener('DOMContentLoaded', function(){
    const forms = document.querySelectorAll('.ajax-contact-form');

    forms.forEach(form=>{
        const responseMessage = form.querySelector('.responseMessage');
        form.addEventListener('submit', function(e){
            e.preventDefault();
            let formData = new FormData(form);
            fetch(form.dataset.action, {
                method: 'post',
                headers: {
                    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(async response => {
                const data=await response.json();

                if(!response.ok){
                    throw data;
                }
                return data;
            })
            .then(data =>{
                responseMessage.innerHTML = `<div class="alert alert-success"> ${data.message}</dev>`;
                form.reset();
            })
            .catch(error => {
                if(error.error){
                    let message=Object.values(error.error).flat().join('<br>');
                    responseMessage.innerHTML=`<div class="alert alert-danger">${message}</dev>`;
                } else{
                    responseMessage.innerHTML=`<div class="alert alert-danger">Something went wrong!</dev>`;
                }
            });
        });
    });
});