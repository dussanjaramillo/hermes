$(document).ready(function(){
    $('#desencriptar').click(function(e){
        e.preventDefault();
        var datos = $.trim($("#entrada2").val());
        $.ajax({
            data: {entrada: datos},
            url: 'back/base64_rollBack_back.php',
            type: 'post',
            beforeSend: function(){
                $("#resultado2").attr("placeholder", "Procesando ....");
            },
            success: function(response){
                $("#resultado2").val(response);
            }
        });
    });
});
