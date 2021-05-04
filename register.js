/* Javascript for register */
function qs(selector){
    return document.querySelector(selector);
}

function validate1() {
    results = {
      'email': validateEmail,
      'phone': validatePhone,
      'password': validatePass,
      'retypepass': validateRepass,
      'first_name': validateFirstname,
      'last_name': validateLastname,
      'address': validateAddress,
      'city': validateCity,
      'zipcode': validateZipcode,
    };

    for (let idx in results) {
      if (!results[idx]) {
        return false;
      }
    }
    alert("Your form has been sent successfully");
    return true;
  }

function validateEmail(){
    ck_email = qs(".regis_email").value;
    email_pattern = /^(?!\.)[a-z.?A-Z.?0-9]{3,}(?<!\.)\@(?!\.)[a-z.?A-Z.?0-9]+(?<!\.)[.]{1}[a-zA-Z]{2,5}(?<!\.)$/;
    if (ck_email.length>0){
      if(email_pattern.test(ck_email)){
        return true;
      } else {alert("Invalid email");}
    }
    else{alert("Please input your email");}
  }
  
  function validatePhone(){
    mobile_pattern = /^(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])$/;
    ck_phone = qs(".regis_phone").value;
    if (ck_phone.length > 0){
        if ( mobile_pattern.test(ck_phone)) {
            return true;
          } else {
            alert("Invalid phone");
          }
    }
    else {alert("Please input your phone number")}        
  }
  
  function validatePass(){
    pass_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(.{8,20})$/;
    ck_pass = qs(".regis_password").value;
    if(ck_pass.length < 8 || ck_pass.length > 20){
      if ( pass_pattern.test(ck_pass)) {
        return true;
      } else {
        alert("Invalid Password");
      }
    }
  }
  
  function validateRepass(){
    repass_pattern = 
    ck_repass = qs(".regis_retype_password").value;
    if(ck_repass.length < 8 || ck_repass.length > 20){
      if ( repass_pattern.test(ck_repass)) {
        return true;
      } else {
        alert("Invalid ReType Password");
      }
    }
  }
  
  function validateFirstname (){
    var e = qs(".first_name");
    first_name = e.value;
    if (first_name.length < 3){
        alert("Your name needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validateLastname (){
    var e = qs(".last_name");
    last_name = e.value;
    if (last_name.length < 3){
        alert("Your name needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validateAddress (){
    var e = qs(".address");
    address = e.value;
    if (address.length < 3){
        alert("Your address needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validateCity (){
    var e = qs(".city");
    city = e.value;
    if (city.length < 3){
        alert("Your city's name needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validateZipcode(){
    zipcode_pattern = /^[0-9]{4,6}$/;
    ck_zipcode = qs(".zipcode").value;
    if(ck_zipcode.length < 8 || ck_zipcode.length > 20){
      if ( zipcode_pattern.test(ck_zipcode)) {
        return true;
      } else {
        alert("Invalid Zipcode");
      }
    }
  }
  
  btn1 = qs("#regis_submit_button");
  btn1.addEventListener("click",validate1)
  
  /*
  btn1.addEventListener("click",validateEmail);
  btn1.addEventListener("click",validatePhone);
  btn1.addEventListener("click",validatePass);
  btn1.addEventListener("click",validateRepass);
  btn1.addEventListener("click",validateFirstname);
  btn1.addEventListener("click",validateLastname);
  btn1.addEventListener("click",validateAddress);
  btn1.addEventListener("click",validateCity);
  */
  /* */