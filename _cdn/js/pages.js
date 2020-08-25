// menu toggle
let show = true;

const menuSection = document.querySelector(".header_menu_section")
const menuToggle = menuSection.querySelector(".header_menu_section_toggle")
const navLink = menuSection.querySelector(".nav-link")

menuToggle.addEventListener("click", () => {

	document.body.style.overflow = show ? "hidden" : "initial"

	menuSection.classList.toggle("on", show)
    show = !show;
})

// Stick navbar
window.addEventListener("scroll", function(){
    const headerContact = document.querySelector(".header_contact");
    const header = document.querySelector("#header");

    if(window.scrollY > 0){
        headerContact.classList.add("hide")
        header.classList.add("sticky")
    }else{
        headerContact.classList.remove("hide")
        header.classList.remove("sticky")
    }
})