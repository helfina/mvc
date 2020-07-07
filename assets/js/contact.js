//-------------------------regex-------------------------------------
let prenomValid = /^[a-zA-ZéèîïÉÈÎÏ]{2,}[a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/
let nomValid = /^[a-zA-ZéèîïÉÈÎÏ]{2,}[a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/
let mailValid = /^[a-zA-Z0-9.-]+@[a-z0-9.-]+.[com|fr]{2,4}$/;
let telValid = /^((\+)33|0)[1-9](\d{2}){4}$/;
// let villeValid = regex
//----------------element--prenom--------------------------
let formValid = document.getElementById('click');
let prenom = document.getElementById('prenom');
// -----------element----nom-----------------------------------
let nom = document.getElementById('nom');
//----------mail-------------------------------------
let mail = document.getElementById('email');
//---------element-----tel--------------
let tel = document.getElementById('tel');
//-------------element-----------------------------------
let error = document.getElementById('feedback')
// error = document.getElementsByTagName('span')
// let ville = document.getElementById('ville')





//-------------------japelle----i call-----------------------

formValid.addEventListener('click', function (event) {
    validContactForm(event, prenom, prenomValid,error);
    validContactForm(event, nom, nomValid, error);
    validContactForm(event, mail, mailValid, error );
    validContactForm(event, tel, telValid, error );
    // validContactForm(event,ville, villeValid, error);
    // console.log(event);


});
//----------------------je recois----i receved----------------
function validContactForm(event, Element, ElementValid, error) {
    //Si le champ est vide
    if (Element.validity.valueMissing) {
        event.preventDefault();
        console.log(error);
        error.textContent = 'contenu manquant';
        error.style.color = 'red';
    } else if (ElementValid.test(Element.value) == false) {
        event.preventDefault();
        error.textContent = 'Format incorrect';
        error.style.color = 'orange';
    } else {
        error.textContent = '\u2714';
        error.style.color = 'green';
        console.log('ok')
    }
}