$(document).ready(function(){
    $('#encriptar').click(function(e){
        e.preventDefault();
        var datos = $.trim($("#entrada").val());
        $.ajax({
            data: {entrada: datos},
            url: 'back/base64_back.php',
            type: 'post',
            beforeSend: function(){
                $("#resultado").attr("placeholder", "Procesando ....");
            },
            success: function(response){
                $("#resultado").val(response);
            }
        });
    });
});
