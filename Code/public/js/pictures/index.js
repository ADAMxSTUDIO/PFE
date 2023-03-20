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





// This function is made to switch picture's gestures when using them
function switchPicGestures() {

    // Specify all resources
    let pictures = document.querySelectorAll('.picture');
    // Specify all <i>'s options clickable 
    const iClasses = [
        ['fa-regular fa-heart', 'fa-regular fa-bookmark', 'fa-solid fa-circle-arrow-down'],
        ['fa-solid fa-heart', 'fa-solid fa-bookmark', 'fa-solid fa-check-to-slot']
    ];  
    // console.log(pictures);
    
    pictures.forEach( picture => 
    {
        const profile = picture.querySelector('.picture-profile'),
              views = picture.querySelector('span');


        // Show picture's gestures on hovering
        picture.addEventListener('mouseover', () => 
        {
            profile.setAttribute('style', 'visibility: visible;')
            picture.querySelectorAll('i').forEach( (i, index) => 
            {
                // Display gestures & views
                i.setAttribute('style', 'display: flex;');
                views.setAttribute('style', 'display: flex;');

                // Change gesture's options when clicked
                i.addEventListener('click', () => 
                {
                    iClasses.forEach( iClassCateg => 
                    {
                        iClassCateg.forEach( (iclassDefault, iDefIndex) => {
                            iClassCateg.forEach( (iclassClicked, iClkIndex) => {
                                if ( index === iDefIndex && index === iClkIndex ){
                                    i.setAttribute('class', iclassClicked);
                                }
                            })
                        })
                    })
                })
            });
        })

        // Hide them while not
        picture.addEventListener('mouseout', () => 
        {
            // Hide gestures & profile
            picture.querySelectorAll('i').forEach( i => 
            {
                views.removeAttribute('style');
                i.removeAttribute('style');
                profile.removeAttribute('style');
            });
        })

    })


}
// => execute
switchPicGestures();