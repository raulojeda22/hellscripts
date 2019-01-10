$(function() {
    $('.datePicker').datepicker({
        dateFormat: 'dd/mm/yy', 
        changeMonth: true, 
        changeYear: true, 
        yearRange: '0:+2',
        minDate: 0,
    });
});