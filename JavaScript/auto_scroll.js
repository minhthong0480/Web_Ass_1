var firstinterval = 0;


function auto_scroll() {
    
        firstinterval += 2;
        parent = document.querySelector('.inside-content-1');
        parent.style.left = "-" + firstinterval + "px";
        if (!(firstinterval % 130)) {
            setTimeout(auto_scroll, 1000);
            firstinterval = 0;
            var firstChild = parent.firstElementChild;
            parent.appendChild(firstChild);
            parent.style.left= 0;
            return;
        }
        runauto_scroll = setTimeout(auto_scroll, 10);
    }
    auto_scroll();

    mouse_over = document.getElementsByClassName("inside-content-1");
    