/* NEW01 */
        
let cookie = document.querySelector("#cookie")
let agree = document.querySelector("#agreement")
agree.addEventListener ("click", function agree() {
  cookie.classList.remove("unclick");
  localStorage.setItem ("Understand","Yes")
})

setTimeout (
    function cookie_consent() {
    if (!localStorage.getItem("Understand"))
    cookie.classList.add("unclick");
}, 100)
/*    */




