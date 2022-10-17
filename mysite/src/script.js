function animenu (){
    var getmenu = document.getElementById('imgmenu')
    
   if(getmenu.style.transform == 'rotate (360deg)' )
   {
    getmenu.style.transform = 'rotate(90deg)'
   }else{
    getmenu.style.transform = 'rotate(360deg)'
   }
    
}