$(document).ready(function(){
    $(".user-name").on('change', function(){
        var userVal = $(this).val();
        $(".email").val(userVal);
    });
});