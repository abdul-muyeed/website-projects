window.addEventListener('scroll',()=>{
    let content = document.querySelector('.home-text');
    let x = document.querySelector('.nav');
    let contentPosition = content.getBoundingClientRect().top;
    if(contentPosition  < 190){
        x.classList.add('active');
    }else{
        x.classList.remove('active');
    }
})

function toggleMenu(){
    var menu = document.getElementById("bar-icon");
    menu.classList.toggle("open"); 
    let x = document.querySelector('.nav-menu');

    x.classList.toggle('top');
}