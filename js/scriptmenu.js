let inputbox = document.querySelector(".input-box");
let searchBox = document.querySelector(".search-box .bx-search");

searchBox.addEventListener("click", ()=>{
    inputbox.classList.toggle("showInput");
})