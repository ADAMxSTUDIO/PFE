// This function is made to switch the explore anchor to an arrow-down
function exploreAnchor() {

    let anchor = document.querySelector('#explore');
    // console.log(anchor);
    // const root = ReactDOM.createRoot(anchor); - new-method -
    
    const i = <i className="fa-solid fa-chevron-down text-dark text-center" onClick = {() => {window.location.hash = '#explore'}}></i>;

    anchor.addEventListener('mouseover', () => {
        anchor.textContent = '';
        
        // Add arrow-down
        ReactDOM.render(i, anchor);
        // root.render(i); - new-method -
    })
    anchor.addEventListener('mouseout', () => {
        anchor.style.color = '#fff';

        // Remove arrow-down
        ReactDOM.unmountComponentAtNode(anchor);
        // root.unmount(anchor); - new-method -
        anchor.textContent = 'Explore';
    })

}
// => execute
exploreAnchor();


//
function showGestures() {

    let pictures = document.querySelectorAll('.picture');
    // console.log(pictures);

    pictures.forEach( picture => {

        let gestures = picture.querySelectorAll('i'),
            profile = picture.querySelector('.picture-profile');
            // greyFilter = picture.querySelector('.picture-profile');
            console.log(gestures, profile, greyFilter);

        picture.addEventListener('mouseover', () => {
            gestures.forEach( gesture => gesture.setAttribute('style', 'display: inline;') );
            profile.setAttribute('style', 'visibility: visible;');
        })

        picture.addEventListener('mouseout', () => {
            gestures.forEach( gesture => gesture.removeAttribute('style') )
            profile.removeAttribute('style');
        })

    })

}
// => execute
showGestures();