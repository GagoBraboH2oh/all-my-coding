function avisar(){
    let menuwp = document.getElementById('menuimg');
    let itemenu = document.getElementById('itensmenu')
    if(menuwp.style.transform == 'rotate(360deg)')
    {
        menuwp.style.transform = 'rotate(90deg)'
        itemenu.style.transform = 'translateX(100%)'
        itemenu.style.transform = 'translateX(0)'
        itemenu.style.display = 'block'
        
        
    } else{
        menuwp.style.transform = 'rotate(360deg)'
        itemenu.style.display = 'none'
        
    }
   
   
}