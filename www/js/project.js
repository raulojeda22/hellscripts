$(document).ready(function() {
    $("#createProject").click(function(){
        $('#projectPageContent').empty();
        $.ajax({
            url: "www/modules/projects/view/create.php",
            type: 'GET',
            success: function (data) {
                $("#projectPageContent").append(data);
            },
            error: function () {
            }
        });
    });
});