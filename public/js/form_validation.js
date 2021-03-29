const green = '#4CAF50';
const red = '#F44336';
// Utility functions
function checkIfEmpty(field) {
  if (isEmpty(field.value.trim())) {
    // set field invalid
    setInvalid(field, `${field.dataset.helper} must not be empty`);
    return true;
  } else {
    // set field valid
    setValid(field);
    return false;
  }
}
function isEmpty(value) {
  if (value === '') return true;
  return false;
}
function setInvalid(field, message) {
  field.style.borderColor = red;
  field.nextElementSibling.innerHTML = message;
  field.nextElementSibling.style.color = red;
}
function setValid(field) {
  field.style.borderColor = '#228B22';
  field.nextElementSibling.innerHTML = '';
  //field.nextElementSibling.style.color = green;
}

function checkIfOnlyLetters() {
  var field = document.forms["myForm"]["fullname"];
  if (/^[a-zA-Z ]+$/.test(field.value)) {
    setValid(field);
    return true;
  } else {
    setInvalid(field, `${field.dataset.helper} must contain only letters`);
    return false;
  }
}

function checkIfOnlyNumbers(field) {
  if (/^[0-9]+$/.test(field.value)) {
    setValid(field);
    return true;
  } else {
    setInvalid(field, `${field.dataset.helper} must contain only numbers`);
    return false;
  }
}

function meetLength(field, minLength, maxLength) {
  if (field.value.length >= minLength && field.value.length < maxLength) {
    setValid(field);
    return true;
  } else if (field.value.length < minLength) {
    setInvalid(
      field,
      `${field.dataset.helper} must be at least ${minLength} characters long`
    );
    return false;
  } else {
    setInvalid(
      field,
      `${field.dataset.helper} must be shorter than ${maxLength} characters`
    );
    return false;
  }
}

function containsCharacters(field, code) {
  let regEx;
  switch (code) {
    case 1:
      // letters
      regEx = /(?=.*[a-zA-Z])/;
      return matchWithRegEx(regEx, field, 'Must contain at least one letter');
    case 2:
      // letter and numbers
      regEx = /(?=.*\d)(?=.*[a-zA-Z])/;
      return matchWithRegEx(
        regEx,
        field,
        'Must contain at least one letter and one number'
      );
    case 3:
      // uppercase, lowercase and number
      regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
      return matchWithRegEx(
        regEx,
        field,
        'Must contain at least one uppercase, one lowercase letter and one number'
      );
    case 4:
      // uppercase, lowercase, number and special char
      regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/;
      return matchWithRegEx(
        regEx,
        field,
        'Must contain at least one uppercase, one lowercase letter, one number and one special character'
      );
    case 5:
      // Email pattern
      regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return matchWithRegEx(regEx, field, 'Must be a valid email address');
    default:
      return false;
  }
}

function matchWithRegEx(regEx, field, message) {
  if (field.value.match(regEx)) {
    setValid(field);
    return true;
  } else {
    setInvalid(field, message);
    return false;
  }
}




function validateName() {
  var x = document.getElementById("fullname");
  var popup = document.getElementById("name-popup");

  var letters = /^[a-zA-Z][a-zA-Z\s]*$/;
  if (isEmpty(x.value)) {
    x.style.borderColor = red;
    popup.innerHTML="Name field cannot be empty!"; 
    popup.classList.add("show");
    return false;
  }else if(x.value.match(letters)){
    
    x.style.borderColor = '#228B22';
    popup.classList.remove("show");
    return true;
   }else{
    x.style.borderColor = red;
    popup.innerHTML="Name can only contain letters!"; 
    popup.classList.add("show");
    return false;
   }
}


function validateNIC() {
  var nic = document.getElementById("NIC");
  var nicPopup = document.getElementById("NIC-popup");

  var lettersNIC = /[0-9]{9}[x|X|v|V]|[0-9]{12}/;

   if (isEmpty(nic.value)) {
      nic.style.borderColor = red;
      nicPopup.innerHTML="NIC field cannot be empty!";
      nicPopup.classList.add("show");
      return false;
    }else if(nic.value.match(lettersNIC)){
    
      nic.style.borderColor = '#228B22';
      nicPopup.classList.remove("show");
      return true;
     }
   else{
      nic.style.borderColor = red;
      nicPopup.innerHTML="Invalid NIC!"; 
      nicPopup.classList.add("show");
      return false;
     }
}


function validateEmail() {
  var email = document.getElementById("email");
  var emailPopup = document.getElementById("email-popup");

  var lettersEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

   if (isEmpty(email.value)) {
      email.style.borderColor = red;
      emailPopup.innerHTML="Email field cannot be empty!"; 
      emailPopup.classList.add("show");
      return false;
    }else if(email.value.match(lettersEmail)){
    
      email.style.borderColor = '#228B22';
      emailPopup.classList.remove("show");
      return true;
     }
   else{
     email.style.borderColor = red;
     emailPopup.innerHTML="Invalid email address!"; 
     emailPopup.classList.add("show");
     return false;
     }
}


function validatePhoneNumber() {
  var phone = document.getElementById("phone");
  var phonePopup = document.getElementById("phone-popup");

  var lettersPhone = /^[0-9]{10}$/;
   if (isEmpty(phone.value)) {
      phone.style.borderColor = red;
      phonePopup.innerHTML="Phone number field cannot be empty!"; 
      phonePopup.classList.add("show");
      return false;
    }else if(phone.value.match(lettersPhone)){
    
      phone.style.borderColor = '#228B22';
      phonePopup.classList.remove("show");
      return true;
     }
   else{
      phone.style.borderColor = red;
      phonePopup.innerHTML="Invalid phone number!"; 
      phonePopup.classList.add("show");
     return false;
     }
}

function validateDOB() {
  var dob = document.getElementById("DOB");
  var dobPopup = document.getElementById("DOB-popup");

  var dd = new Date();
  var month = dd.getMonth()+1;
  var day = dd.getDay();
  var year = dd.getYear();

  var newdate = new Date(year,month,day);
  var inputDate = new Date(dob);

    if(newdate > inputDate){
      dob.style.borderColor = '#228B22';
      dobPopup.classList.remove("show");
      return true;
    }else{
      dob.style.borderColor = red;
      dobPopup.innerHTML="Invalid date of birth!"; 
      dobPopup.classList.add("show");
     return false;
     }
}

function containsNumbers() {
  var num = document.getElementById("num");
  var numPopup = document.getElementById("number-popup");

  var lettersNum = /^[0-9]*$/;
   if (isEmpty(num.value)) {
      num.style.borderColor = red;
      numPopup.innerHTML="field cannot be empty!"; 
      numPopup.classList.add("show");
      return false;
    }else if(num.value.match(lettersNum)){
    
      num.style.borderColor = '#228B22';
      numPopup.classList.remove("show");
      return true;
     }
   else{
      num.style.borderColor = red;
      numPopup.innerHTML="Can only contain numbers!"; 
      numPopup.classList.add("show");
     return false;
     }
    
}

function validatePhoneNum() {
  var phone = document.getElementById("phone");
  var phonePopup = document.getElementById("phone-popup");

  var lettersPhone = /^[0-9]{9}$/;
   if (isEmpty(phone.value)) {
      phone.style.borderColor = red;
      phonePopup.innerHTML="Phone number field cannot be empty!"; 
      phonePopup.classList.add("show");
      return false;
    }else if(phone.value.match(lettersPhone)){
    
      phone.style.borderColor = '#228B22';
      phonePopup.classList.remove("show");
      return true;
     }
   else{
      phone.style.borderColor = red;
      phonePopup.innerHTML="Invalid phone number!"; 
      phonePopup.classList.add("show");
     return false;
     }
}

function validatePaperMarker() {
  return validateName() && validateNIC() && validateEmail() && validatePhoneNumber();
}

function validateStudent() {
  return validateName() && validateNIC() && validateEmail() && validatePhoneNumber() && containsNumbers();
}

function validateTeacher() {
  return validateName() && validateNIC() && validateEmail() && validatePhoneNumber() && containsNumbers();
}

