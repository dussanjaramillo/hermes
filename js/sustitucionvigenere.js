$(document).ready(function(){
    $('#encriptar').click(function(e){
        e.preventDefault();
        var clave = $.trim($("#clave").val());
        var datos = $.trim($("#entrada").val());
        $.ajax({
            data: {key: clave, entrada: datos},
            url: 'back/sustitucionvigenere_back.php',
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
