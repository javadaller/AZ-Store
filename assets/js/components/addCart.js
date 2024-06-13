import { Set } from "./LocalStorage.js";

export function addCart() {
    const btnAdd = document.querySelectorAll(".card__btnAdd")
    let arrayCart=[]
    btnAdd.forEach(element=>{
        element.addEventListener("click", ()=>{
            console.log(element.parentNode.parentNode.children[0].getAttribute("src"));
            const object = {
                name: element.previousElementSibling.children[0].innerText,
                price:parseInt(element.previousElementSibling.children[1].innerText.replace('€', ''), 10),
                image:element.parentNode.parentNode.children[0].getAttribute("src"),
            }
            arrayCart.push(object)
            Set('cart', arrayCart)
        })
    })
}