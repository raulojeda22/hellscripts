$(document).ready(function (){
    $('.logout').click(function (){
        Cookies.remove('email');
        Cookies.remove('token');
    });
})