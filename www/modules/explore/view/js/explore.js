$(document).ready(function() {
    $.ajax({
        url: "www/modules/explore/model/getSearchParams.php",
        type: "GET",
        success: function(data){
            data=JSON.parse(data);
            $.ajax({
                url: "www/modules/projects/model/projects.php?license="+data.license+"&languages="+data.languages+"&name="+data.name,                                         type: 'GET',
                success: function (data) {
                    data=JSON.parse(data);
                    data.forEach(element => {
                        $.ajax({
                            url: "www/modules/projects/view/projectDiv.php", //SHOW PROJECTS
                            type: 'POST',
                            data: { data: element},
                            success: function(data) {
                                $('#exploreProjects').append(data);
                                $(".projectGet").click(function(){  //GET PROJECTS
                                    var parent=$(this).parent();
                                    var projectId=parent.attr('id').replace('project','');
                                    var method=$(this).attr('name');
                                    object = {id: projectId}
                                    $.ajax({
                                        url: "www/modules/projects/model/projects.php?id="+projectId,
                                        type: method,
                                        success: function (data){
                                            data=JSON.parse(data)[0];
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
                                            } else if(method=='DELETE'){
                                                parent.remove();
                                            }
                                        },
                                        error: function (data){
                                            console.log(data);
                                        }
                                    });
                                })
                            },
                            error: function(data){
                                console.log(data);
                            }
                        });
                    });
                },
                error: function(data){
                    console.log(data);
                }
            });
            ;
            repositoryName=data.name.substr(1).slice(0, -1);
            $.ajax({
                url: 'https://api.github.com/search/repositories?q='+repositoryName+'&sort=stars&order=desc',
                type: 'GET',
                success: function(data){
                    console.log(data);
                    data.items.forEach(function(element){
                        /*
                        element.description;
                        element.homepage;
                        element.language;
                        element.license.spdx_id;
                        element.name;
                        element.owner.login;
                        element.score;
                        element.full_name;
                        element.contents_url;
                        element.owner.avatar_url;
                        */
                        var object = {};
                        object = Object.assign({image: element.owner.avatar_url},object);
                        object = Object.assign({id: element.id},object);
                        object = Object.assign({name: element.full_name},object);
                        object = Object.assign({languages: element.language},object);
                        object = Object.assign({url: element.svn_url},object);
                        $.ajax({
                            url: "www/modules/projects/view/projectGithubDiv.php", //SHOW PROJECTS
                            type: 'POST',
                            async: false,
                            data: { data: object},
                            success: function(data) {
                                $('#githubProjects').append(data);
                            },
                            error: function(data){
                                console.log(data);
                            }
                        });
                    });
                },
                error: function (data){
                    console.log(data);
                }
            });
        },
        error: function(data){
            console.log(data);
        }
    });
    
});
