$(document).ready(function(){
    $(".user-name").on('change', function(){
        var userVal = $(this).val();
        $(".user-email").val(userVal-1);
    });
});