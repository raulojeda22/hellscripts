$('.toggle_option').bind('change', function(){
    console.log($('#checkBoxValue').val());
    $('#checkBoxValue').val($(this).val());
    console.log($('#checkBoxValue').val());
    console.log($(this).val());
})