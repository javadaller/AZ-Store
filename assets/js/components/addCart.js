import { Get, Set } from "./LocalStorage.js";

let arrayCart = []
export function addCart() {
    arrayCart = Get('cart', null) || []
    const btnAdd = document.querySelectorAll(".card__btnAdd")
    btnAdd.forEach(element=>{
        element.addEventListener("click", ()=>{
            const object = {
                name: element.previousElementSibling.children[0].innerText,
                price:parseInt(element.previousElementSibling.children[1].innerText.replace('€', ''), 10),
                image:element.parentNode.parentNode.children[0].getAttribute("src"),
            }
            console.log(arrayCart);
            arrayCart.push(object)
            Set('cart', arrayCart)
        })
    })
}