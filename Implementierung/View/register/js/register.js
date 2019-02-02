$(document).ready(function(){
  $('#modalAGB').modal();
});

console.log("ht");
  function validatePasswords()
 {
    console.log("awdwa");

     var pass1 = document.getElementById('password1');
     var pass2 = document.getElementById('password2');
     //Store the Confimation Message Object ...
     var message = document.getElementById('confirmMessage');
     //Set the colors we will be using ...
     //Compare the values in the password field
     //and the confirmation field
     if(pass1.value == pass2.value){
         //The passwords match.
         //Set the color to the good color and inform
         //the user that they have entered the correct password
         message.innerHTML = "Passwords Match!"
         var btn = document.getElementById('buttonSend');
         btn.classList.remove('disabled');
     }else{
         //The passwords do not match.
         //Set the color to the bad color and
         //notify the user.
         message.innerHTML = "Passwords Do Not Match!"
         var btn = document.getElementById('buttonSend');
         buttonSend.classList.add('disabled');
     }
 }
