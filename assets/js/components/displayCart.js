import { Get } from "./LocalStorage.js";
import * as DOM from "./generateElement.js";

export function displayCart() {
    const cart = document.querySelector("#cart")
    let arrayCart = Get('cart', null)
    for (const element of arrayCart) {
        const listCart = DOM.createDiv(cart,'cart__list')
        const listCartLeft = DOM.createDiv(listCart,'cart__list__description')
        console.log(element);
        DOM.generateImg(element.image,element.name,listCartLeft,"list--img")
        DOM.generateElement("p", element.name,listCartLeft,"list--name")
        DOM.generateElement("p", `${element.price}€`, listCart, "list--price")
    }
}