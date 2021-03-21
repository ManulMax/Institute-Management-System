function validateParentName() {
  var x = document.getElementById("parent_name");
  var popup = document.getElementById("parentName-popup");

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

function validateParentPhoneNumber() {
  var phone = document.getElementById("parent_tel");
  var phonePopup = document.getElementById("parentTel-popup");

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

function validateSubject1() {
  var x = document.getElementById("subject1");
  var popup = document.getElementById("subject1-popup");

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

function validateStudentOtherDetails() {
  return validateParentName() && validateParentPhoneNumber();
}