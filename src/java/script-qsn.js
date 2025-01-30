function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}

//------------------------ SCROLL REVEAL EFFECT ----------------------------------

window.montrer = ScrollReveal({ reset: true })

//------------------------------CONTENT 1-------------------------------------

montrer.reveal('.effect-title',
    {
        duration: 2000,
        distance: '90px'
    })

montrer.reveal('.effect-description',
    {
        duration: 2000,
        distance: '90px',
        delay: 500
    })

montrer.reveal('.mid-pic',
    {
        duration: 2000,
        distance: '90px',
        origin: 'right',
        delay: 500
    })

montrer.reveal('.mid-pic-2',
    {
        duration: 2000,
        distance: '90px',
        origin: 'left',
        delay: 500
    })