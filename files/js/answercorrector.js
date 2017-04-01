$(document).ready(function(){
    $("#answer").bind("keyup blur", function(){
        $("#answer").val($("#answer").val().replace(/[^A-z0-9]/gi, '').replace(/[`_^\\\[\]]/g, '').toLowerCase());
    });
});