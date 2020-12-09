const panel = document.getElementsByClassName("panel")[0];

document.addEventListener('click', (e)=>{
    if(e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if(e.target.id == 'menuBtn')
        panel.classList.add('view');
})