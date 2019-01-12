function loadDatePicker(){
    $('.datePicker').datepicker({
        dateFormat: 'dd/mm/yy', 
        changeMonth: false, 
        changeYear: false, 
        yearRange: '0:+2',
        minDate: 0,
    });
}