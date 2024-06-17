export function nav() {
    const currentPage = window.location.pathname

    const home = document.querySelectorAll('.navHome')
    home.forEach(element => {
        element.addEventListener('click', () => {
            if(currentPage.includes('index.php')) {
                window.location.href = 'index.php';
            } else {
                window.location.href = '../../index.php';
            }
        })
    });

    const about = document.querySelectorAll('.navAbout')
    about.forEach(element => {
        element.addEventListener('click', () => {
            if(currentPage.includes('index.php')) {
                window.location.href = 'assets/php/about.php';
            } else {
                window.location.href = './about.php';
            }
        })
    });

    const products = document.querySelectorAll('.navProducts')
    products.forEach(element => {
        element.addEventListener('click', () => {
            if(currentPage.includes('index.php')) {
                window.location.href = 'assets/php/products.php';
            } else {
                window.location.href = './products.php';
            }
        })
    });

    const contact = document.querySelectorAll('.navContact')
    contact.forEach(element => {
        element.addEventListener('click', () => {
            window.location.href = 'https://www.radiocontact.be/';
        })
    });

    document.querySelector('.navShoppingcart').addEventListener('click', () => {
        if(currentPage.includes('index.php')) {
            window.location.href = 'assets/php/shopping-cart.php';
        } else {
            window.location.href = './shopping-cart.php';
        }
    })

    document.querySelector('#login').addEventListener('click', () => {
        if(currentPage.includes('index.php')) {
            window.location.href = 'assets/php/login.php';
        } else {
            window.location.href = './login.php';
        }
    })

    document.querySelector('#loginSvg').addEventListener('click', () => {
        if(currentPage.includes('index.php')) {
            window.location.href = 'assets/php/login.php';
        } else {
            window.location.href = './login.php';
        }
    })

    const seeOurStore = document.querySelector('#seeOurStore')
    if(seeOurStore != null) {
        seeOurStore.addEventListener('click', () => {
            window.location.href = 'https://www.nike.com/be/fr/';
        })
    }

    const confirm = document.querySelector("#confirm")
    if(confirm!= null){
        confirm.addEventListener('click',()=>{
            if(currentPage.includes('index.php')) {
                window.location.href = 'assets/php/checkout.php';
            } else {
                window.location.href = './checkout.php';
            }
        })
    }
}