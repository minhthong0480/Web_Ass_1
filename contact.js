function qs(selector){
    return document.querySelector(selector);
}

function validate() {
    results = {
      'name': check_name(),
      'phone': check_phone(),
      'email': check_email()
    };
    for (let idx in results) {
      if (!results[idx]) {
        return false;
      }
    }
    return true;
  }

function check_name (){
    var e = qs("#your_name");
    ck_name = e.value;
    if (ck_name.length < 3){
        alert("Your name needs at least 3 characters");
        return true;
    }
    else {return false;}
}

function check_phone(){
    mobile_pattern = /^(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])|(0[-. ]?[1-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9][-. ]?[0-9])$/;
    ck_phone = qs("#phone").value;
    if (ck_phone.length > 0){
        if ( mobile_pattern.test(ck_phone)) {
            return true;
          } else {
            alert("Invalid phone");
          }
    }
    else {alert("Please input your phome number")}
        
        
}

btn = qs(".submit_button");
btn.addEventListener("click",check_name);
btn.addEventListener("click",check_phone);

