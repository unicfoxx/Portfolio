console.log('Executing scriptsheet');

// Confetti
// A effect added through a thrid party script
function pop() {
    console.log('Executing pop');
    confetti({
        particleCount: 500,
        spread: 180,
        origin: { y: 0.6 },
        scalar: 1.5,
        gravity: 0.3,
        colors: ['#FF0000', '#FFA500', '#87CEEB', '#87CEEB']
    });
    console.log('Completed pop');
}

// Activates the effect on load
window.onload = function () {
    console.log('Executing pop');
    pop();
    console.log('Completed pop');
};

// Dropdown Menu Animation
// Shows the menus when hovering the mouse over the settings button and menu button
document.addEventListener('DOMContentLoaded', () => {
    const navbutton = document.getElementById('nav-button');
    const setbutton = document.getElementById('set-button');
    const sidenav = document.getElementById('sidenav');
    const sideset = document.getElementById('sideset');
    let timeout;

    // Side Navigation Button
    // Makes the nav button rotate 90 deg by adding a class to the classlist
    navbutton.addEventListener('mouseenter', () => {
        clearTimeout(timeout);
        navbutton.classList.add('rotate');
        sidenav.classList.remove('nodisplay');
    });

    // Removes the rotate class from the classlist and makes the button rotate back to it's original position, also checks if grandma mode is activated and adds a longer timeout if it is true
    navbutton.addEventListener('mouseleave', () => {
        if (document.cookie.includes('grandma=true')){
            timeout = setTimeout(() => {
                navbutton.classList.remove('rotate');
                sidenav.classList.add('nodisplay');
            }, 1000);
        } else {
            timeout = setTimeout(() => {
                navbutton.classList.remove('rotate');
                sidenav.classList.add('nodisplay');
            }, 200);
        }
    });

    // Side Navigation Menu
    // Has the same functions as the one above
    sidenav.addEventListener('mouseenter', () => {
        clearTimeout(timeout);
        sidenav.classList.remove('nodisplay');
        navbutton.classList.add('rotate');
    });

    sidenav.addEventListener('mouseleave', () => {
        if (document.cookie.includes('grandma=true')) {
            timeout = setTimeout(() => {
                sidenav.classList.add('nodisplay');
                navbutton.classList.remove('rotate');
            }, 1000);
        } else {
            timeout = setTimeout(() => {
                sidenav.classList.add('nodisplay');
                navbutton.classList.remove('rotate');
            }, 200);
        }
    });

    // Side Settings Button
    // Has the same functions as the one above
    setbutton.addEventListener('mouseenter', () => {
        clearTimeout(timeout);
        setbutton.classList.add('rotate');
        sideset.classList.remove('nodisplay');
    });

    setbutton.addEventListener('mouseleave', () => {
        if (document.cookie.includes('grandma=true')) {
            timeout = setTimeout(() => {
                setbutton.classList.remove('rotate');
                sideset.classList.add('nodisplay');
            }, 1000);
        } else {
            timeout = setTimeout(() => {
                setbutton.classList.remove('rotate');
                sideset.classList.add('nodisplay');
            }, 200);
        }
    });

    // Side Settings Menu
    // Has the same functions as the one above
    sideset.addEventListener('mouseenter', () => {
        clearTimeout(timeout);
        sideset.classList.remove('nodisplay');
        setbutton.classList.add('rotate');
    });

    sideset.addEventListener('mouseleave', () => {
        if (document.cookie.includes('grandma=true')) {
            timeout = setTimeout(() => {
                sideset.classList.add('nodisplay');
                setbutton.classList.remove('rotate');
            }, 1000);
        } else {
            timeout = setTimeout(() => {
                sideset.classList.add('nodisplay');
                setbutton.classList.remove('rotate');
            }, 200);
        }
    });
});

// Page Navigation
// Drops a navigation menu to make it easier to move around the page
document.addEventListener('DOMContentLoaded', () => {
    const topbar = document.getElementById('topbar');
    const pagenav = document.getElementById('topbar-pagenav');
    let timeout2;

    topbar.addEventListener('mouseenter', () => {
        clearTimeout(timeout2); 
        pagenav.classList.remove('nodisplay2'); 
    });

    topbar.addEventListener('mouseleave', () => {
        timeout2 = setTimeout(() => {
            pagenav.classList.add('nodisplay2');
        }, 200);
    });

    pagenav.addEventListener('mouseenter', () => {
        clearTimeout(timeout2); 
        pagenav.classList.remove('nodisplay2'); 
    });

    pagenav.addEventListener('mouseleave', () => {
        timeout2 = setTimeout(() => {
            pagenav.classList.add('nodisplay2');
        }, 200);
    });
});

