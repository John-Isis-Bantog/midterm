// function view_order(){
//     window.location = 'view/view_order.php';
// }

// function view_menu(){
//     window.location = 'view/view_menu_items.php';
// }
const scrollUp = () =>{
    const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
                        : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

// scroll section active link

const sections = document.querySelectorAll('section[id]')