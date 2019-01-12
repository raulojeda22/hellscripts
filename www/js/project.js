$(document).ready(function() {
    $("#createProject").click(function(){
        $('#projectPageContent').empty();
        $.ajax({
            url: "www/modules/projects/controllers/create.php",
            type: 'GET',
            success: function (data) {
                $("#projectPageContent").append(data);
                loadDatePicker();
            },
            error: function () {
            }
        });
    });
});