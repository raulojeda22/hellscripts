$(document).ready(function(){
    $('#loginSubmit').click(function(){
        $('.loginError').empty();
        var object = {};
        var emptyValue = false;
        var errorsList = [];
        var email='';
        $('.loginFormElement').map(function(){
            var name = $(this).attr('name');
            var value = $(this).val();
            if (value==""){
                emptyValue=true;
                errorsList.push(name);
            }
            if (name=='email'){
                email=value;
            }
            object = Object.assign({[name]: value},object);
        });
        if (!emptyValue){
            console.log('POST login accepted');
            $.ajax({
                url: 'www/modules/users/model/users.php',
                type: 'POST',
                data: {data: JSON.stringify(object)},
                success: function(data){
                    Cookies.set('email', email);
                    Cookies.set('token', data);
                    window.location.href = 'home'
                },
                error: function(data){
                    console.log(data)
                    $('.loginError').html('<h4 class="errorText text-default" >Wrong email or password</h4>');
                    $('html, body').animate({
                        scrollTop: $('html').offset().top
                    }, 500, 'easeInOutExpo');
                }
            });
            
        } else {
            console.log('POST login canceled');
            $('.loginError').html('<h4 class="errorText text-default" >Please check the </h4>');
            errorsList.forEach(function(value,index){
                if (index === errorsList.length - 2){
                    $('.errorText').append(value+' and ');
                } else if (index === errorsList.length - 1){
                    $('.errorText').append(value+'.');
                } else {
                    $('.errorText').append(value+', ');
                }
            });
            $('html, body').animate({
                scrollTop: $('html').offset().top
            }, 500, 'easeInOutExpo');
        }
    });
    $('#registerSubmit').click(function(){
        $('.registerError').empty();
        var object = {};
        var emptyValue = false;
        var errorsList = [];
        $('.registerFormElement').map(function(){
            var name = $(this).attr('name');
            var value = $(this).val();
            if (value==""){
                emptyValue=true;
                errorsList.push(name);
            }
            if (name=='email'){
                email=value;
            }
            if (name!='repeatPassword'){
                object = Object.assign({[name]: value},object);
            }
        });
        if ($('#passwordRegister').val() != $('#repeatPasswordRegister').val()){
            emptyValue=true;
            errorsList.push('passwords are different')
        };
        if (!emptyValue){
            console.log('POST register accepted');
            
            var token='';
            for (n=0;n<5;n++){
                newToken = Math.random().toString(36).substring(2, 15);
                token = token.concat(newToken);
            }
            $.ajax({
                url: 'www/modules/users/model/users.php',
                type: 'POST',
                data: {data: JSON.stringify(object)},
                beforeSend: function (xhr) {
                    xhr.setRequestHeader ("Authorization", token);
                },
                success: function(data){
                    console.log(data);
                    Cookies.set('email', email);
                    Cookies.set('token', data);
                    window.location.href = 'home'
                },
                error: function(data){
                    console.log(data)
                    $('.registerError').html('<h4 class="errorText text-default" >Wrong input</h4>');
                    $('html, body').animate({
                        scrollTop: $('html').offset().top
                    }, 500, 'easeInOutExpo');
                }
            });
        } else {
            console.log('POST register canceled');
            $('.registerError').html('<h4 class="errorText text-default" >Please check the </h4>');
            errorsList.forEach(function(value,index){
                if (index === errorsList.length - 2){
                    $('.errorText').append(value+' and ');
                } else if (index === errorsList.length - 1){
                    $('.errorText').append(value+'.');
                } else {
                    $('.errorText').append(value+', ');
                }
            });
            $('html, body').animate({
                scrollTop: $('html').offset().top
            }, 500, 'easeInOutExpo');
        }    
    });
});