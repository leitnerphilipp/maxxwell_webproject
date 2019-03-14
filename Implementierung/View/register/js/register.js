$(document).ready(function(){
  $('#modalAGB').modal();
  $('.sidenav').sidenav();
});

var passCheck = false;
  function validatePasswords()
 {
     var pass1 = document.getElementById('password1');
     var pass2 = document.getElementById('password2');
     var message = document.getElementById('confirmMessage');

     if(pass1.value == pass2.value && pass2.value.length != 0 && pass1.value.length != 0) {
         message.innerHTML = "";
         pass2.classList.remove('invalid');
         pass2.classList.add('valid');
         passCheck = true;

         checkForm();

     }else{
       if(pass2.value.length != 0 && pass1.value.length != 0)
       {
         message.innerHTML = "Passwörter sind nicht gleich!";
         pass2.classList.remove('valid');
         pass2.classList.add('invalid');
         passCheck = false;

         checkForm();
       }
     }
 }

  function checkForm()
  {
    if(passCheck == true && document.getElementById('indeterminate-checkbox').checked == true
      && document.getElementById('username').classList.contains('valid')
      && document.getElementById('email').classList.contains('valid'))
    {
      console.log("aw");
      var btn = document.getElementById('buttonSend');
      btn.classList.remove('disabled');
    }

    else {
      var btn = document.getElementById('buttonSend');
      btn.classList.add('disabled');
    }
  }
