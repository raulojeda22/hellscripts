$(document).ready(function() {
    $.ajax({
        url: "www/modules/projects/model/projects.php",
        type: 'GET',
        success: function (data) {
            data=JSON.parse(data);
            data.forEach(element => {
                $.ajax({
                    url: "www/modules/projects/view/projectDiv.php",
                    type: 'POST',
                    data: { data: element},
                    success: function(data) {
                        $('#allProjects').append(data);
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
    $("#createProject").click(function(){
        $('#projectPageContent').empty();
        $.ajax({
            url: "www/modules/projects/controllers/create.php",
            type: 'GET',
            async: false,
            success: function (data) {
                $("#projectPageContent").append(data);
                loadDatePicker();
            },
            error: function (data) {
                console.log(data);
            }
        });
        $("#projectFormButton").click(function(){
            var object = {};
            $('.projectFormElement').map(function(){
                var name = $(this).attr('name');
                object = Object.assign({[name]: $(this).val()},object);
            });
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
        });
    });    
});
