$(document).ready(function() {
    $.ajax({
        url: "www/modules/projects/model/projects.php",  //LOAD PROJECTS
        type: 'GET',
        success: function (data) {
            data=JSON.parse(data);
            data.forEach(element => {
                $.ajax({
                    url: "www/modules/projects/view/projectDiv.php", //SHOW PROJECTS
                    type: 'POST',
                    async: false,
                    data: { data: element},
                    success: function(data) {
                        $('#allProjects').append(data);
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
            });
            $(".projectGet,  .projectDelete").click(function(){  //GET OR DELETE PROJECTS
                var projectId=$(this).parent().attr('id').replace('project','');
                var method=$(this).attr('name');
                object = {id: projectId}
                $.ajax({
                    url: "www/modules/projects/model/projects.php?id="+projectId,
                    type: method,
                    success: function (data){
                        data=JSON.parse(data)[0];
                        console.log(data);
                        if (method=='GET'){
                            $.each(data, function(key,value){
                                $('#'+key+'ProjectModal').html(value);
                            });
                            $("#details_project").show();
                            $("#project_modal").dialog({
                                width: 850,
                                height: 500,
                                resizable: "false",
                                modal: "true",
                                buttons: {
                                    Ok: function () {
                                        $(this).dialog("close");
                                    }
                                },
                                show: {
                                    effect: "blind",
                                    duration: 1000
                                },
                                hide: {
                                    effect: "explode",
                                    duration: 1000
                                }
                            });
                        }
                    },
                    error: function (data){
                        console.log(data);
                    }
                });
            })
        },
        error: function (data) {
            console.log(data);
        }
    });
    $("#createProject").click(function(){  //SHOW PROJECT FORM
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
        $("#projectFormButton").click(function(){  //POST PROJECT
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
