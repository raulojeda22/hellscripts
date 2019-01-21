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
                        $('#allHomeProjects').append(data);
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
});
