function menu (){
    if(itensmenu.style.display == 'block'){
        itensmenu.style.display = 'none'
    }else{
        itensmenu.style.display = 'block'
    }
}

function bodysize(){
   if(window.innerWidth >= 768){
    itensmenu.style.display = 'none'
   }else{
    itensmenu.style.display = 'block'
   }
}
