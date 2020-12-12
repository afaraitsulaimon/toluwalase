var contactForm = document.forms.contactUsForm;

var errorOnContactFormFullName = document.getElementById("nameErrOnContactForm");
var errorOnContactFormEmail = document.getElementById("emailErrOnContactForm");
var errorOnContactFormPhone = document.getElementById("phoneErrOnContactForm");
var errorOnContactFormMessage = document.getElementById("messageErrOnContactForm");



function checkContactFormFullName() {

    if (contactForm.fullNameOfContactForm.value === "" || contactForm.fullNameOfContactForm.value === null) {

        contactForm.fullNameOfContactForm.style.borderColor = "red";
        errorOnContactFormFullName.innerHTML = "Please enter Full name";

    } else {

        errorOnContactFormFullName.innerHTML = "";
        contactForm.fullNameOfContactForm.style.borderColor = "green";


    }
}

contactForm.fullNameOfContactForm.addEventListener("blur", checkContactFormFullName, false);




function checkContactFormEmail() {

    if (contactForm.emailOfContactForm.value === "" || contactForm.emailOfContactForm.value === null) {

        contactForm.emailOfContactForm.style.borderColor = "red";
        errorOnContactFormEmail.innerHTML = "Please enter an Email Address";

    } else if (contactForm.emailOfContactForm.value.indexOf('@') > contactForm.emailOfContactForm.value.lastIndexOf('.')) {


        contactForm.emailOfContactForm.style.borderColor = "red";
        emailErrOnContactForm.innerHTML = "Enter Email address Correctly";



    } else if (contactForm.emailOfContactForm.value.indexOf('@') === -1) {

        contactForm.emailOfContactForm.style.borderColor = "red";
        emailErrOnContactForm.innerHTML = "Invalid Email address";

    } else {

        emailErrOnContactForm.innerHTML = "";
        contactForm.emailOfContactForm.style.borderColor = "green";



    }
}

contactForm.emailOfContactForm.addEventListener("blur", checkContactFormEmail, false);




function checkContactFormPhone() {

    if (contactForm.phoneOfContactForm.value === "" || contactForm.phoneOfContactForm.value === null) {

        contactForm.phoneOfContactForm.style.borderColor = "red";
        errorOnContactFormPhone.innerHTML = "Please enter an Phone Number";

    } else if (!Number(contactForm.phoneOfContactForm.value)) {

        contactForm.phoneOfContactForm.style.borderColor = "red";
        errorOnContactFormPhone.innerHTML = "Enter Numbers";

    } else if (contactForm.phoneOfContactForm.value.length < 11 || contactForm.phoneOfContactForm.value.length > 11) {

        contactForm.phoneOfContactForm.style.borderColor = "red";
        errorOnContactFormPhone.innerHTML = "Numbers must be 11";

    } else {


        errorOnContactFormPhone.innerHTML = "";
        contactForm.phoneOfContactForm.style.borderColor = "green";



    }
}

contactForm.phoneOfContactForm.addEventListener("blur", checkContactFormPhone, false);







function checkContactFormMessage() {

    if (contactForm.messageOfContactForm.value === "" || contactForm.messageOfContactForm.value === null) {

        contactForm.messageOfContactForm.style.borderColor = "red";
        errorOnContactFormMessage.innerHTML = "Please enter your message";

    } else if (contactForm.messageOfContactForm.value.length < 100) {

        contactForm.messageOfContactForm.style.borderColor = "red";
        errorOnContactFormMessage.innerHTML = "Message must be longer than 100";

    } else {


        errorOnContactFormMessage.innerHTML = "";
        contactForm.messageOfContactForm.style.borderColor = "green";



    }
}

contactForm.messageOfContactForm.addEventListener("blur", checkContactFormMessage, false);