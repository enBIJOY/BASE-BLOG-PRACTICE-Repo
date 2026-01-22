document.addEventListener('DOMContentLoaded', function () {

    const form = document.querySelectorAll('.ajax-form');
    const responseMessage = document.querySelector('.responseMessage');

    if (!form) {
        console.log("Form not found!");
        return;
    }

    if (!responseMessage) {
        console.log("Response message element not found!");
        return;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(form);

        fetch(form.dataset.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(async response => {
            const data = await response.json();

            if (!response.ok) {
                throw data;
            }

            return data;
        })
        .then(data => {
            responseMessage.innerHTML =
                `<div class="alert alert-success">${data.message}</div>`;

            // reset form
            form.reset();
        })
        .catch(error => {
            if (error.errors) {
                let messages = Object.values(error.errors).flat().join('<br>');
                responseMessage.innerHTML =
                    `<div class="alert alert-danger">${messages}</div>`;
            } else {
                responseMessage.innerHTML =
                    `<div class="alert alert-danger">Something went wrong!</div>`;
            }
        });
    });

});



// document.addEventListener('DOMContentLoaded', function () {

//     const forms = document.querySelectorAll('.ajax-form');

//     forms.forEach(form => {
//         const responseMessage = form.querySelector('.responseMessage');

//         form.addEventListener('submit', function (e) {
//             e.preventDefault();

//             let formData = new FormData(form);

//             fetch(form.dataset.action, {
//                 method: 'POST',
//                 headers: {
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
//                     'Accept': 'application/json'
//                 },
//                 body: formData
//             })
//             .then(async response => {
//                 const data = await response.json();

//                 if (!response.ok) {
//                     throw data;
//                 }

//                 return data;
//             })
//             .then(data => {
//                 responseMessage.innerHTML =
//                     `<div class="alert alert-success">${data.message}</div>`;

//                 form.reset();
//             })
//             .catch(error => {
//                 if (error.errors) {
//                     let messages = Object.values(error.errors).flat().join('<br>');
//                     responseMessage.innerHTML =
//                         `<div class="alert alert-danger">${messages}</div>`;
//                 } else {
//                     responseMessage.innerHTML =
//                         `<div class="alert alert-danger">Something went wrong!</div>`;
//                 }
//             });
//         });
//     });

// });



// // document.addEventListener('DOMContentLoaded', function () {

// //     const form = document.querySelector('.ajax-form');
// //     const responseMessage = document.querySelector('#responseMessage');

// //     if (!form) {
// //         console.log("Form not found!");
// //         return;
// //     }

// //     if (!responseMessage) {
// //         console.log("Response message element not found!");
// //         return;
// //     }

// //     form.addEventListener('submit', function (e) {
// //         e.preventDefault();

// //         let formData = new FormData(form);

// //         fetch(form.dataset.action, {
// //             method: 'POST',
// //             headers: {
// //                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
// //                 'Accept': 'application/json'
// //             },
// //             body: formData
// //         })
// //         .then(async response => {
// //             const data = await response.json();

// //             if (!response.ok) {
// //                 throw data;
// //             }

// //             return data;
// //         })
// //         .then(data => {
// //             responseMessage.innerHTML =
// //                 `<div class="alert alert-success">${data.message}</div>`;

// //             // reset form
// //             form.reset();
// //             form.querySelectorAll('input, textarea').forEach(el => el.value = '');
// //         })
// //         .catch(error => {
// //             if (error.errors) {
// //                 let messages = Object.values(error.errors).flat().join('<br>');
// //                 responseMessage.innerHTML =
// //                     `<div class="alert alert-danger">${messages}</div>`;
// //             } else {
// //                 responseMessage.innerHTML =
// //                     `<div class="alert alert-danger">Something went wrong!</div>`;
// //             }
// //         });
// //     });

// // });
