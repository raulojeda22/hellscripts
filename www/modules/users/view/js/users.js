$(document).ready(function(){
    $('#loginSubmit').click(function(){
        $('.loginError').empty();
        var object = {};
        var emptyValue = false;
        var errorsList = [];
        $('.loginFormElement').map(function(){
            var name = $(this).attr('name');
            var value = $(this).val();
            if (value==""){
                emptyValue=true;
                errorsList.push(name);
            }
            object = Object.assign({[name]: value},object);
        });
        if (!emptyValue){
            console.log('POST login accepted');
            /*
            $.ajax({
                url: 'www/modules/projects/model/projects.php',
                type: 'POST',
                data: {data: JSON.stringify(object)},
                success: function(data){
                    console.log(data);
                },
                error: function(){
                    console.log(data);
                }
            });
            */
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
            object = Object.assign({[name]: value},object);
        });
        if (!emptyValue){
            console.log('POST register accepted');
            /*
            $.ajax({
                url: 'www/modules/projects/model/projects.php',
                type: 'POST',
                data: {data: JSON.stringify(object)},
                success: function(data){
                    console.log(data);
                },
                error: function(){
                    console.log(data);
                }
            });*/
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