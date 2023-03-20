// This function is made to show the category photos contained number
function showPhotosCount(){
    // Specify the resource
    const categories = document.querySelectorAll('.category');

    // Get each category
    categories.forEach( category => {
        // Show the category photos count
        category.addEventListener('mouseover', () => {
            category.querySelectorAll('p').forEach( photosCount  => {
                photosCount.setAttribute('style', 'visibility: visible');
            });
        });

        // Hide it
        category.addEventListener('mouseout', () => {
            category.querySelectorAll('p').forEach( photosCount  => {
                photosCount.removeAttribute('style');
            });
        });

    })      
}
// => execute
showPhotosCount();