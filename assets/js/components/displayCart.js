import { Get, Set } from "./LocalStorage.js";
import * as DOM from "./generateElement.js";

export function displayCart() {
    const cart = document.querySelector("#cart")
    let arrayCart = Get('cart', null)
    if(arrayCart!==null){
        for (const element of arrayCart) {
            if(cart!=null){
                const listCart = DOM.createDiv(cart,'cart__list')
                const listCartLeft = DOM.createDiv(listCart,'cart__list__description')
                const divBtn = DOM.createDiv(listCartLeft,"list--divBtn")
                const remove = DOM.generateElement("span","remove",divBtn,"material-symbols-outlined")
                const add = DOM.generateElement("span","add",divBtn,"material-symbols-outlined")
                DOM.generateImg(element.image,element.name,listCartLeft,"list--img")
                DOM.generateElement("p", element.name,listCartLeft,"list--name")
                const quantity = DOM.generateElement("p", `Quantité: ${element.quantity}`,listCart,"list--quantity")
                const listCartRight = DOM.createDiv(listCart,'cart__list__price')
                const totalPrice = DOM.generateElement("p", `${element.totalPrice}€`, listCartRight, "list--price")
                const deleted = DOM.generateElement("span","delete",listCartRight,"material-symbols-outlined")
                const divSexy = DOM.createDiv(cart,"divSexy")

                add.addEventListener("click",()=>{
                    element.quantity+=1
                    element.totalPrice += element.price
                    Set('cart', arrayCart)
                    quantity.innerText = `Quantité: ${element.quantity}`
                    totalPrice.innerText = `${element.totalPrice}€`
                })

                remove.addEventListener("click", ()=>{
                    element.quantity-=1
                    element.totalPrice -= element.price
                    Set('cart', arrayCart)
                    quantity.innerText = `Quantité: ${element.quantity}`
                    totalPrice.innerText = `${element.totalPrice}€`
                    if (element.quantity==0) {
                        listCart.remove()
                        divSexy.remove()
                        removeFromCart(element.name, arrayCart)
                    }
                })

                deleted.addEventListener("click",()=>{
                    listCart.remove()
                    divSexy.remove()
                    removeFromCart(element.name,arrayCart)
                })
            }
        }
    }
}

export function displayCart_checkout() {
    console.log('i exist')
    const cart = document.querySelector("#cart_checkout")
    console.log (cart)
    let arrayCart = Get('cart', null)
    if(arrayCart!==null){
        for (const element of arrayCart) {
            if(cart!=null){
                const listCart = DOM.createDiv(cart,'cart__list')
                const listCartLeft = DOM.createDiv(listCart,'cart__list__description')
                const divBtn = DOM.createDiv(listCartLeft,"list--divBtn")
                DOM.generateImg(element.image,element.name,listCartLeft,"list--img")
                DOM.generateElement("p", element.name,listCartLeft,"list--name")
                const quantity = DOM.generateElement("p", `Quantité: ${element.quantity}`,listCart,"list--quantity")
                const listCartRight = DOM.createDiv(listCart,'cart__list__price')
                const totalPrice = DOM.generateElement("p", `${element.totalPrice}€`, listCartRight, "list--price")
                const deleted = DOM.generateElement("span","delete",listCartRight,"material-symbols-outlined")
                const divSexy = DOM.createDiv(cart,"divSexy")

                deleted.addEventListener("click",()=>{
                    listCart.remove()
                    divSexy.remove()
                    removeFromCart(element.name,arrayCart)
                })
            }
        }
    }
}

function removeFromCart(name, array) {
    const index = array.findIndex(item => item.name === name)
    if (index !== -1) {
        array.splice(index, 1)
        Set("cart", array)
    }
}