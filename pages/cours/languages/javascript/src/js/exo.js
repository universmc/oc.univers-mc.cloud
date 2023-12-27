// let monBouton = document.getElementById("monBouton");
// monBouton.addEventListener("click", function () {
//     console.log("Vous avez cliqué sur le bouton")
// });
// 
// 
// let bouton1 = document.getElementById("bouton1");
// 
// bouton1.addEventListener("click", () => {
//     console.log("click OK button slide Gauche")
// });
// 
// let bouton2 = document.getElementById("bouton2");
// bouton2.addEventListener("click", () => {
// 	console.log("click OK button slide droit")
// })
let listBoutons = document.querySelectorAll("button")

for (let i = 0; i < listBoutons.length; i++ ){
    let boutonActuel = listBoutons[1]
    console.log(boutonActuel)

    boutonActuel.addEventListener("clic", (event) => {
        monBouton = event.target
        console.log(' jai cliquer sur le btp : ${monBouton.id}')
    })
}
