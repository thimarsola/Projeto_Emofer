// menu toggle
let show = true;

const menuSection = document.querySelector(".header_menu_section")
const menuToggle = menuSection.querySelector(".header_menu_section_toggle")

menuToggle.addEventListener("click", () => {

	document.body.style.overflow = show ? "hidden" : "initial"

	menuSection.classList.toggle("on", show)
    show = !show;
})

// Stick navbar
window.addEventListener("scroll", function(){
    const headerContact = document.querySelector(".header_contact");
    const header = document.querySelector("#header");

    headerContact.classList.toggle("hide", window.scrollY > 0)
    header.classList.toggle("sticky", window.scrollY > 0)
})