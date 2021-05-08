/* NEW02 */

/* Thong extra infomation */
let image = document.getElementById("Thong's photo")
let overlay1 = document.querySelector("#Thong")
image.addEventListener ("click", function on () {
    document.getElementById("Thong").style.display = "block";
  })
overlay1.addEventListener ("click",function off() {
    document.querySelector("#Thong").style.display = "none";
})
/*     */
/* Van extra infomation */
let image2 = document.getElementById("Van's photo")
let overlay2 = document.querySelector("#Van")
image2.addEventListener ("click", function on () {
    document.getElementById("Van").style.display = "block";
  })

overlay2.addEventListener ("click",function off() {
    document.querySelector("#Van").style.display = "none";
})
/*      */
/* Nhan extra infomation */
let image3 = document.getElementById("Nhan's photo")
let overlay3 = document.querySelector("#Nhan")
image3.addEventListener ("click", function on () {
    document.getElementById("Nhan").style.display = "block";
  })

overlay3.addEventListener ("click",function off() {
    document.querySelector("#Nhan").style.display = "none";
})
/*   */