$(document).ready(function() {
    var license = '!!';
    var languages = '!!';
    var name = '!!';
    var results = '';
    function setSearchParams(){
        if (typeof license == undefined || license == ''){
            license='!!';
        }    
        if (typeof languages == undefined || languages == ''){
            languages='!!';
        }   
        if (typeof names == undefined || name==''){
            name='!!';
        }
        $.ajax({
            url: "www/modules/explore/model/setSearchParams.php",
            type: "POST",
            data: { params: {license: license, languages: languages, name: name} },
            success: function(data){
                console.log(data);
                window.location.href = 'explore';
            },
            error: function(data){
                console.log(data);
            }
        });
    }
    function anySearchChange(license,languages,name){
        if (typeof license == undefined || license == ''){
            license='!!';
        }    
        if (typeof languages == undefined || languages == ''){
            languages='!!';
        }   
        if (typeof names == undefined || name==''){
            name='!!';
        }
        console.log(license,languages,name);
        $.ajax({
            url: "www/modules/projects/model/projects.php?license="+license+"&languages="+languages+"&name="+name,                                         type: 'GET',
            success: function (data) {
                data=JSON.parse(data);
                results=data;
                licenseShown=[];
                languagesShown=[];
                namesShown=[];
                $('#suggestionsLicense').empty();
                $('#suggestionsLanguages').empty();
                $('#suggestionsName').empty();                
                data.forEach(element => {
                    if (licenseShown.indexOf(element.license) == -1){
                        licenseShown.push(element.license);
                        $('#suggestionsLicense').append('<option value="'+element.license+'">')
                    }
                    if (languagesShown.indexOf(element.languages) == -1){
                        languagesShown.push(element.languages);
                        $('#suggestionsLanguages').append('<option>'+element.languages+'</option>')
                    }
                    if (namesShown.indexOf(element.name) == -1){
                        namesShown.push(element.name);
                        $('#suggestionsName').append('<option>'+element.name+'</option>')
                    }
                });
            },
            error: function(data){
                console.log(data);
            }
        });
    }
    $(document).keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            if ($("#licenseSearch").is(":focus")) {
                $("#licenseSearch").blur();
            }
            if ($("#languagesSearch").is(":focus")) {
                $("#languagesSearch").blur();
            }
            if ($("#nameSearch").is(":focus")) {
                $("#nameSearch").blur();
            }
            setSearchParams();	
        }
    });
    $.ajax({
        url: "www/modules/projects/model/projects.php",  //LOAD PROJECTS
        type: 'GET',
        success: function (data) {
            anySearchChange(license,languages,name);
            data=JSON.parse(data);
            data.forEach(element => {
                $.ajax({
                    url: "www/modules/projects/view/projectDiv.php", //SHOW PROJECTS
                    type: 'POST',
                    async: false,
                    data: { data: element},
                    success: function(data) {
                        $('#allHomeProjects').append(data);
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
            });
            
            $('#licenseSearch').change(function(){
                license=$(this).val();
                languages=$('#languagesSearch').val();
                name='!'+$('#nameSearch').val()+'!';
                anySearchChange(license,languages,name);
            });
            $('#languagesSearch').change(function(){
                license=$('#licenseSearch').val();
                languages=$(this).val();
                name='!'+$('#nameSearch').val()+'!';
                anySearchChange(license,languages,name);
            });
            $('#nameSearch').change(function(){
                license=$('#licenseSearch').val();
                languages=$('#languagesSearch').val();
                name='!'+$(this).val()+'!';
                anySearchChange(license,languages,name);
            });

            $('#projectSearch').click(function(){
                setSearchParams();
            });

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
                        $.ajax({
                            url: "www/modules/projects/view/projectPage.php",
                            type: 'POST',
                            data: { data: data},
                            success: function (data){
                                $('#homePageContent').html(data);
                            }
                        });

                        /*
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
                        }*/
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
});
