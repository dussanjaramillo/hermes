$(document).ready(function(){
    $('#desencriptar').click(function(e){
        e.preventDefault();
        var clave = $.trim($("#clave2").val());
        var datos = $.trim($("#entrada2").val());
        $.ajax({
            data: {key: clave, entrada: datos},
            url: 'back/sustitucionvigenere_rollBack_back.php',
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
