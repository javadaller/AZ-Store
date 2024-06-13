import { addCart } from "./components/addCart.js";
import { displayCart } from "./components/displayCart.js";

//nav
const home = document.querySelectorAll('.navHome')
home.forEach(element => {
    element.addEventListener('click', () => {
        window.location.href = '../php/index.php';
    })
});

const about = document.querySelectorAll('.navAbout')
about.forEach(element => {
    element.addEventListener('click', () => {
        window.location.href = '../php/about.php';
    })
});

const products = document.querySelectorAll('.navProducts')
products.forEach(element => {
    element.addEventListener('click', () => {
        window.location.href = '../php/products.php';
    })
});

const contact = document.querySelectorAll('.navContact')
contact.forEach(element => {
    element.addEventListener('click', () => {
        window.location.href = '../php/contact.php';
    })
});

document.querySelector('.navShoppingcart').addEventListener('click', () => {
    window.location.href = '../php/shopping-cart.php';
})

document.querySelector('#login').addEventListener('click', () => {
    window.location.href = '../php/login.php';
})

// document.querySelector('#seeOurStore').addEventListener('click', () => {
//     window.location.href = 'https://github.com/javadaller';
// })

addCart()
displayCart()