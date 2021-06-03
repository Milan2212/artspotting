(function () {
    "use strict";
    var menu = document.querySelector(".menu");
    var ouverture = document.querySelector("#menu");

    function clickouverture() {
        if (menu.classList.contains('open')) {
            menu.classList.remove('open');
        } else {
            menu.classList.add('open');
        }
    }

    ouverture.addEventListener('click', clickouverture);
});