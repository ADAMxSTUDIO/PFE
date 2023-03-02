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