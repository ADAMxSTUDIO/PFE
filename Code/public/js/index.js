// This function is made to change the navigatio bar behavior to adjust the background
function chnageNavOpacity() {

    // Specify all resources
    const navBar = document.querySelector('header'),
          branding = navBar.querySelector('h3'),
          anchors = navBar.querySelectorAll('a'),
          joinAnchor = navBar.querySelector('a:nth-child(5)'),
          search = navBar.querySelector('i');
    // console.log(navBar, branding, anchors, joinAnchor, search);
    
    // Track window height while scrolling
    window.addEventListener('scroll', () => {

        // The window height has exceeded the welcome section
        if(window.pageYOffset > 600) {
            // NavBar custom
            navBar.setAttribute('style', 'position: fixed; background-color: #fff;');
            branding.setAttribute('style', 'color: #000;');
            anchors.forEach( anchor => { anchor.setAttribute('style', 'color: #000;') });
            joinAnchor.classList.add('join-scrollDown');
            search.setAttribute('style', 'color: #000;');
        }

        // Whent not
        else{
            // Discard NavBar custom
            navBar.removeAttribute('style');
            branding.removeAttribute('style');
            anchors.forEach( anchor => { anchor.removeAttribute('style') });
            joinAnchor.classList.remove('join-scrollDown');
            search.removeAttribute('style');
        }

    })
    
}
// => execute
chnageNavOpacity();



// This function is made to add a btn for scrolling to the all-top
function ScrollTop() {

    // Specify all resources
    const btn = document.querySelector('#scrollTop');
    // console.log(btn);

    // Show & Hide the btn relying on the screen-scrolling
    window.addEventListener('scroll', () => {

        // When scrolling down up than 900px
        if(window.pageYOffset > 900) {
            btn.setAttribute('style', 'display: inline');
            // Add btn's behavior when clicked
            btn.addEventListener('click', () => {
                window.scroll({
                    top: '.header',
                    left: 0,
                    behavior: 'smooth'
                });
            })
        }

        // Still top of screen
        else{
            btn.removeAttribute('style');
        }
    })

}
// => execute
ScrollTop();