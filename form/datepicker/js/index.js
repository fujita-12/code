$('#datepicker, #datepicker2').datepicker({
    changeMonth: true,
    duration: 300,
    showAnim: 'show',
    dateFormat: 'yy年mm月dd日',
    monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"]
});

$(function(){
    $('#select-cue').change(function(){
        let datepickerValue = $('#datepicker').val();
        if(datepickerValue == '') {
            $('#datepicker').datepicker('show');
        }
    });
    $('#datepicker').datepicker();
    $('#datepicker').datepicker('option', 'onClose', function() {
        setTimeout(function() {
            let datepickerValue2 = $('#datepicker2').val();
            if(datepickerValue2 == '') {
                $('#datepicker2').datepicker('show');
            }
        }, 10);
    });
    $('#datepicker2').datepicker();
});