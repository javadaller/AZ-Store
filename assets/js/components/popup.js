export function popup() {
    const popup = document.querySelector("#add__popup")
    const btnAdd = document.querySelectorAll(".card__btnAdd")

    for (const element of btnAdd) {
        element.addEventListener("click", ()=>{
            console.log("je suis la");
            const computedStyle = window.getComputedStyle(popup);
            const displayStyle = computedStyle.getPropertyValue('display');
            if (displayStyle === "none") {
                popup.style.display = "block";
            } else {
                popup.style.display = "none";
            }
            popup.style.opacity = 1
            setTimeout(()=>{
                let interval = setInterval(()=>{
                    console.log("tu esdans le interval");
                    popup.style.opacity -= 0.025
                    if (popup.style.opacity==0) {
                        clearInterval(interval)
                        popup.style.display="none"
                    }
                }, 125)
            },2000)
        })
    }
}
