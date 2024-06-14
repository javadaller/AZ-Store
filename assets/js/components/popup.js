export function popup() {
    const popup = document.querySelector("#add__popup");
    const btnAdd = document.querySelectorAll(".card__btnAdd");
    let interval = null;

    for (const element of btnAdd) {
        element.addEventListener("click", () => {
            console.log("je suis là");

            if (interval) {
                clearInterval(interval);
                interval = null;
            }

            popup.style.opacity = 1;
            popup.style.display = "block";

            setTimeout(() => {
                interval = setInterval(() => {
                    console.log("tu es dans l'interval");
                    popup.style.opacity -= 0.025;
                    if (popup.style.opacity <= 0) {
                        clearInterval(interval);
                        interval = null;
                        popup.style.display = "none";
                    }
                }, 125);
            }, 2000);
        });
    }
}

