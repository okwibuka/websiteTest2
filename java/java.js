`use strict`;

//classes declarations

const overlay = document.querySelector(".overlay")
const navImg = document.querySelector(".nav-img")
const menuItems = document.querySelector(".menu-items")
const menuExit = document.querySelector(".menu-exit")
const loginItems = document.querySelector(".login")
const loginMenu = document.querySelector(".log")
const loginExit = document.querySelector(".exit")
const languageMenu = document.querySelector(".lang")
const languageExit = document.querySelector(".language-exit")
const languageItems = document.querySelector(".language-items")
const scrollToComment = document.querySelector(".scroll-to-comment")
const comment = document.querySelector(".comment")
const serviceArrow = document.querySelector(".customer-services-btn")
const hiddenServices = document.querySelector(".services-hidden")
const signUp = document.querySelector(".sign")
const signUpContents = document.querySelector(".adress")
const menulinks = document.querySelectorAll(".menu-item")
const commerceArrow = document.querySelector(".e-commerce-arrow")
const hiddenCommerceServices = document.querySelector(".commerce-hidden")
const closeServices = document.querySelector(".close-services")
const closeCommerce = document.querySelector(".close-commerce")
   
//removing overlay and login form

overlay.remove()
loginItems.remove()

//.........................................................

 //login btn

 loginMenu.addEventListener("click", function()
 {
loginItems.classList.remove("login-hidden")
overlay.classList.remove("login-hidden")
 })

 // exit btn

loginExit.addEventListener("click" ,function()
{
    loginItems.classList.add("login-hidden") 
    overlay.classList.add("login-hidden")
     
}
)

 //overlay
 overlay.addEventListener("click", function()
 {
loginItems.classList.add("login-hidden")
overlay.classList.add("login-hidden")

 })

 //----------------------------------------------------

// menu Button removal and add hidden
navImg.addEventListener("click", function()
{
   
menuItems.classList.remove("menu-hidden")
})
menuExit.addEventListener("click", function()
{
menuItems.classList.add("menu-hidden")
})
//--------------------------------------------------------

//language removal and add hidden
languageMenu.addEventListener("click" , function()
{
languageItems.classList.remove("lang-hidden")
}
)
languageExit.addEventListener("click" ,function()
{
    languageItems.classList.add("lang-hidden")   
}
)
//--------------------------------------------------------------

//scroll to comment

scrollToComment.addEventListener("click" , function(){
    
    comment.scrollIntoView({behavior:"smooth"})
})

//---------------------------------------------------------------------

// services arrow
serviceArrow.addEventListener("click" , function(e)
{
hiddenServices.classList.remove("services-hidden")
 document.querySelector(".customer-services-arrow").style.color = "#f3f3f3"
 serviceArrow.style.backgroundColor = "#f3f3f3"
})

closeServices.addEventListener("click" , function()
{
    hiddenServices.classList.add("services-hidden")
    serviceArrow.style.backgroundColor = "black"

})

// e-commerce arrow

commerceArrow.addEventListener("click", function(){
    hiddenCommerceServices.classList.remove("commerce-hidden")

     commerceArrow.style.backgroundColor = "#f3f3f3" 

    })

    closeCommerce.addEventListener("click" , function()
{
    hiddenCommerceServices.classList.add("commerce-hidden")
    commerceArrow.style.backgroundColor = "black" 

})
//---------------------------------------------------------------------


// menu links scrolls
for(let i = 0 ; i < menulinks.length ; i++){
    menulinks[i].addEventListener("click", function(e){
        e.preventDefault()
        const targ = e.target.getAttribute("href")
        document.querySelector(targ).scrollIntoView({behavior: "smooth"})
        menuItems.classList.add("menu-hidden")
    })
}

//--------------------------------------------------------------------------------------------

// rehidding both hiddden e-commerce and customer services

const remove = document.querySelectorAll(".remove")

for(i = 0 ; i<remove.length ; i++)
{
    remove[i].addEventListener("click" , function(e)
    {

        if (e.target.classList.contains("close-commerce"))
        {
            hiddenCommerceServices.classList.add("commerce-hidden")
           commerceArrow.style.backgroundColor = "black"

        }else{
            hiddenServices.classList.add("services-hidden")
            serviceArrow.style.backgroundColor = "black"
        }

    })
}

// other way

// const reHideCommerce = document.querySelector(".close-commerce")
// const reHideServices = document.querySelector(".close-services")

// reHideCommerce.addEventListener("click", function()
// {
// hiddenCommerceServices.classList.add("hidden-e-commerce-imgs")
// })
// reHideServices.addEventListener("click", function()
// {
// hiddenServices.classList.add("hidden-customer-services")

// })

//--------------------------------------------------------------------------------