 const loginForm = document.querySelector('.js-login');
 const appModal = document.querySelector('.app-modal');
 var closeLogin = document.querySelectorAll('.form-login-close');


 function showLoginForm() {
     appModal.classList.add('open-login');

 }


 function showRegisterForm() {
     addRegisterForm.classList.add('open-register')

 }

 function closeLoginForm() {
     appModal.classList.remove('open-login');
 }

 function closeRegisterForm() {
     addRegisterForm.classList.remove('open-register');
 }
 for (var i = 0; i < closeLogin.length; i++) {
     if (i == 0) {
         closeLogin[i].addEventListener('click', closeLoginForm);
     } else {
         closeLogin[i].addEventListener('click', closeRegisterForm);
     }

 }

 loginForm.addEventListener('click', showLoginForm);



 var addRegisterForm = document.querySelector('.app-modal-register');
 var eventRegister = document.querySelector('.js-register');


 eventRegister.addEventListener('click', showRegisterForm);