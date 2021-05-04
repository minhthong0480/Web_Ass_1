/* Javascript for contact */
function qs(selector){
    return document.querySelector(selector);
}

function validate() {
    results = {
      'name': check_name(),
      'phone': check_phone(),
      'email': check_email(),
      'checkbox': check_checkbox(),
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
    else {alert("Please input your phone number")}        
}

function check_email(){
    ck_email = qs("#email").value;
    email_pattern = /^(?!\.)[a-z.?A-Z.?0-9]{3,}(?<!\.)\@(?!\.)[a-z.?A-Z.?0-9]+(?<!\.)[.]{1}[a-zA-Z]{2,5}(?<!\.)$/;
    if (ck_email.length>0){
      if(email_pattern.test(ck_email)){
        return true;
      } else {alert("Invalid email");}
    }
    else{alert("Please input your email");}
}

function check_checkbox()
{
    var checkbox=document.getElementsByName("contact_day");
    var box_checked=false;
    for(var i=0,n=checkbox.length;i<n;i++)
    {
        if(checkbox[i].checked)
        {
            box_checked=true;
            break;
        }
    }
    if(box_checked){
      return true;
    }
    else {alert("Please check a checkbox")};
}

btn = qs(".submit_button");
btn.addEventListener("click",validate)
/*
btn.addEventListener("click",check_name);
btn.addEventListener("click",check_phone);
btn.addEventListener("click",check_email);
btn.addEventListener("click",check_checkbox);
*/



