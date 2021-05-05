/* Javascript for register */
function qs(selector){
    return document.querySelector(selector);
}

function validate1() {
    results = {
       'email': validate_email(),
      'phone': validate_phone(),
      'password': validate_pass(),
      'retypepass': validate_repass(),
      'first_name': validate_firstname(),
      'last_name': validate_lastname(),
      'address': validate_address(),
      'city': validate_city(),
      'zipcode': validate_zipcode(),
    };

    for (let idx in results) {
      if (!results[idx]) {
        return false;
      }
    }
    
    return true;
  }

function validate_email(){
    var e = qs("#regis_email");
    vali_email = e.value;
    email_pattern = /^(?!\.)[a-z.?A-Z.?0-9]{3,}(?<!\.)\@(?!\.)[a-z.?A-Z.?0-9]+(?<!\.)[.]{1}[a-zA-Z]{2,5}(?<!\.)$/;
    if (vali_email.length > 0){
      if(email_pattern.test(vali_email)){
        return true;
      } else {alert("Invalid email");}
    }
    else{alert("Please input your email");}
  }

  function validate_phone(){
    mobile_pattern = /^(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])$/;
    var e = qs("#regis_phone")
    vali_phone = e.value;
    if (vali_phone.length > 0){
        if ( mobile_pattern.test(vali_phone)) {
            return true;
          } else {
            alert("Invalid phone");
          }
    }
    else {alert("Please input your phone number")}        
  }
  
  function validate_pass(){
    pass_pattern = /^(?!.*[\s])(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(.{8,20})$/;
    var e = qs("#regis_password")
    vali_pass = e.value;
    if(vali_pass.length < 8 || vali_pass.length > 20){
      if ( pass_pattern.test(vali_pass)) {
        return true;
      } else {
        alert("Invalid Password");
      }
    }
    else{alert("Please input your password")}
  }
  
  function validate_repass(){
    repass_pattern = /^(?!.*[\s])(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(.{8,20})$/;
    var e = qs("#regis_repass")
    vali_repass = e.value;
    if(vali_repass.length < 8 || vali_repass.length > 20){
      if ( repass_pattern.test(vali_repass)) {
        return true;
      } else {
        alert("Invalid ReType Password");
      }
    }
    else{alert("PLease reinput your password")}
  }
  
  function validate_firstname(){
    var e = qs("#first_name");
    first_name = e.value;
    if (first_name.length < 3){
        alert("Your first name needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validate_lastname(){
    var e = qs("#last_name");
    last_name = e.value;
    if (last_name.length < 3){
        alert("Your last name needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validate_address(){
    var e = qs("#address");
    address = e.value;
    if (address.length < 3){
        alert("Your address needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validate_city(){
    var e = qs("#city");
    city = e.value;
    if (city.length < 3){
        alert("Your city's name needs at least 3 characters");
        return true;
    }
    else {return false;}
  }

  function validate_zipcode(){
    zipcode_pattern = /^[0-9]{4,6}$/;
    ck_zipcode = qs("#zipcode").value;
    if(ck_zipcode.length < 8 || ck_zipcode.length > 20){
      if ( zipcode_pattern.test(ck_zipcode)) {
        return true;
      } else {
        alert("Invalid Zipcode");
      }
    }
  }
  
  btn1 = qs("#regis_submit_button");
  btn1.addEventListener("click",validate1);
  
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