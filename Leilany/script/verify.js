// JavaScript Document

  function validateForm(){
   var user, email;
   user = document.forms["theForm"].elements["name"].value;
   email = document.forms["theForm"].elements["email"].value;
    
   if(user == "" || email == ""){
    window.alert("The form is not complete");
    return false;
   }
   
   else{
    /*document.theForm.submit();*/
    /*document.theForm.submit();*/
   }
  }
