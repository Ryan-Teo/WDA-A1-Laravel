$(document).ready(function(){
    $(".user-name").on('change', function(){
        alert($(this).val());
        var userVal = $(this).val();
        $(".email").val(userVal);
    });


});