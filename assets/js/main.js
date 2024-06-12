//nav
const home = document.querySelectorAll('.navHome')
home.forEach(element => {
    element.addEventListener('click', () => {
        window.location.href = '../php/index.php';
    })
});

document.querySelector('.navShoppingcart').addEventListener('click', () => {
    window.location.href = '../php/shopping-cart.php';
})

document.querySelector('#seeOurStore').addEventListener('click', () => {
    window.location.href = 'https://github.com/javadaller';
})