function login (){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if(email == 'admin@gmail.com' && senha=='admin'){
        location.href = 'https://github.com/';
    }else{
        alert("[error]")
    }

}