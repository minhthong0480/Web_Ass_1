var firstinterval = 0;
var stop_scroll_new_product;
var stop_scroll_feature_product;

function auto_scroll() {

    firstinterval += 2;
    parent = document.querySelector('#inside-content-1-id');
    parent.style.left = "-" + firstinterval + "px";
    if (!(firstinterval % 200)) {
        stop_scroll_new_product = setTimeout(auto_scroll, 3000);
        firstinterval = 0;
        var firstChild = parent.firstElementChild;
        parent.appendChild(firstChild);
        parent.style.left = 0;
        return;
    }
    stop_scroll_new_product = setTimeout(auto_scroll, 10);
}

auto_scroll();

function stop_scroll_new_product_fnc() {
    clearTimeout(stop_scroll_new_product);
}


function auto_scroll_1() {
    firstinterval += 2;
    parent = document.querySelector('#inside-content-2-id');
    parent.style.left = "-" + firstinterval + "px";
    if (!(firstinterval % 200)) {
        stop_scroll_feature_product = setTimeout(auto_scroll_1, 3000);
        firstinterval = 0;
        var firstChild = parent.firstElementChild;
        parent.appendChild(firstChild);
        parent.style.left = 0;
        return;
    }
    stop_scroll_feature_product = setTimeout(auto_scroll_1, 10);
}

auto_scroll_1();

function stop_scroll_feature_product_fnc() {
    clearTimeout(stop_scroll_feature_product);
}


document.getElementById("inside-content-1-id").addEventListener("mouseover", stop_scroll_new_product_fnc);

document.getElementById("inside-content-1-id").addEventListener("mouseout", auto_scroll);

document.getElementById("inside-content-2-id").addEventListener("mouseover", stop_scroll_feature_product_fnc);

document.getElementById("inside-content-2-id").addEventListener("mouseout", auto_scroll_1);

//Reference: https://stackoverflow.com/questions/37130851/implement-plain-javascript-carousel-without-plugin
