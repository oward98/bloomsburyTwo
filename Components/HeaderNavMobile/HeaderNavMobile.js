var menuContent = document.getElementById('headerNav');

function showMenu() {
    menuContent.style.display = 'block';
}

function hideMenu() {
    menuContent.style.display = 'none';
}

function addClickFunctionality() {
    //only true at start if CSS set display to none, therefore mobile
    var menuShowing = menuContent.style.display === 'block';
    if (menuShowing) return;

    var menuButton = document.getElementById('mobileMenuButton');
    function toggleMenu() {
        var menuShowing = menuContent.style.display === 'block';
        if (menuShowing) {
            hideMenu()
        } else {
            showMenu()
        }
    }
    menuButton.onclick = toggleMenu;
}

function keepCheckOnWindowSize() {
    window.onresize = function() {
        if (window.innerWidth > 850) {
            showMenu();
        } else {
            hideMenu()
        }
    }
}

addClickFunctionality();
keepCheckOnWindowSize();