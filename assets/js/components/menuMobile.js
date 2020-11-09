let  menuMobile = ($)=>{
    // Shorthand 
    const Id = document.getElementById.bind(document)   
    let mobileNav = Id('mobile-nav-wrap')   
    let navToggle = Id('nav-toggle')   
   $('#nav-toggle').on('click', () => {
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active') 
    }) 
    $('#mobile-menu li').on('click',()=>{ 
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')  
    })
}

export default menuMobile
 