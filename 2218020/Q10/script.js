const buttons = document.querySelectorAll(".filter-btn");
const cards = document.querySelectorAll(".food-card");
const searchBox = document.getElementById("searchBox");

/* CATEGORY FILTER */

buttons.forEach(button => {

    button.addEventListener("click", () => {

        document.querySelector(".active").classList.remove("active");

        button.classList.add("active");

        const category = button.getAttribute("data-category");

        cards.forEach(card => {

            if(category === "all"){
                card.style.display = "block";
            }
            else if(card.classList.contains(category)){
                card.style.display = "block";
            }
            else{
                card.style.display = "none";
            }

        });

    });

});


/* SEARCH FUNCTION */

searchBox.addEventListener("keyup", function () {

    let value = this.value.toLowerCase();

    cards.forEach(card => {

        let foodName = card.querySelector("h2").innerText.toLowerCase();

        if(foodName.includes(value)){
            card.style.display = "block";
        }
        else{
            card.style.display = "none";
        }

    });

});


/* RECIPE SHOW */

function showRecipe(recipeId){

    const recipes = document.querySelectorAll(".recipe");

    recipes.forEach(recipe => {
        recipe.style.display = "none";
    });

    document.getElementById(recipeId).style.display = "block";

    document.getElementById(recipeId).scrollIntoView({
        behavior:"smooth"
    });

}