var firstinterval = 0;
var stop_scroll_new_product;
var stop_scroll_feature_product;

function auto_scroll() {
    
        firstinterval += 2;
        parent = document.querySelector('.inside-content-1');
        parent.style.left = "-" + firstinterval + "px";
        if (!(firstinterval % 200)) {
            stop_scroll_new_product = setTimeout(auto_scroll, 3000);
            firstinterval = 0;
            var firstChild = parent.firstElementChild;
            parent.appendChild(firstChild);
            parent.style.left= 0;
            return;
        }
        stop_scroll_new_product = setTimeout(auto_scroll, 10);
}

function stop_scroll_new_product_fnc() {
    clearTimeout(stop_scroll_new_product);
}

function stop_scroll_feature_product_fnc() {
    clearTimeout(stop_scroll_feature_product);
}


function auto_scroll_1() {
    
        firstinterval += 2;
        parent = document.querySelector('.inside-content-2');
        parent.style.left = "-" + firstinterval + "px";
        if (!(firstinterval % 200)) {
            stop_scroll_feature_product(auto_scroll_1, 3000);
            firstinterval = 0;
            var firstChild = parent.firstElementChild;
            parent.appendChild(firstChild);
            parent.style.left= 0;
            return;
        }
        stop_scroll_feature_product = setTimeout(auto_scroll_1, 10);
    }

    