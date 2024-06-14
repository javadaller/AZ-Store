import { Get, Set } from "./LocalStorage.js";

let arrayCart = []

export function addCart() {
    arrayCart = Get('cart', null) || []

    const btnAdd = document.querySelectorAll(".card__btnAdd")
    btnAdd.forEach(element => {
        element.addEventListener("click", () => {
            console.log(element);
            const name = element.previousElementSibling.children[0].innerText;
            const price = parseInt(element.previousElementSibling.children[1].innerText.replace('€', ''), 10);
            const image = element.parentNode.parentNode.children[0].getAttribute("src");
            console.log("j'ai clic sur le btn");
            const existingItem = arrayCart.find(item => item.name === name);

            if (existingItem) {
                console.log("il ajoute une quantité");
                existingItem.quantity += 1;
                existingItem.totalPrice += price;
            } else {
                console.log("je crée l'objet");
                arrayCart.push({
                    name: name,
                    price: price,
                    totalPrice: price,
                    image: image,
                    quantity: 1
                });
            }

            Set('cart', arrayCart);
        });
    });
}