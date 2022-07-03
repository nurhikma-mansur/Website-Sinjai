var navBar = document.querySelector('#level-1 nav')

window.onscroll = () => {
    console.log(window.pageYOffset)
    if(window.pageYOffset > 600){
        navBar.classList.add('show');
    }
    
    if(window.pageYOffset < 600){
        navBar.classList.remove('show');
    }
}
