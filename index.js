

const menuBar = document.querySelector("#menuBar")
const menuClose = document.querySelector("#menuClose")
const navbar = document.querySelector("#navbar")
const navbarUl = document.querySelector("#navbarUl")
const header = document.querySelector("#header")

menuBar.addEventListener("click", () => {
  menuBar.style.display = "none"
  menuClose.style.display = "block"
   menuClose.style.paddingBottom = "5px"  
  navbarUl.style.display = "block"
  
})

menuClose.addEventListener("click", () => {
  menuBar.style.display = "block"
  menuClose.style.display = "none"
  navbarUl.style.display = "none"
  header.style.marginTop = "10px"
})
