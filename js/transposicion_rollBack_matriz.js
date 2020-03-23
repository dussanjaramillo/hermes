$(document).ready(function(){
    $('#matriz3').click(function(e){
        e.preventDefault();
        var datos = $.trim($("#entrada2").val());
        $.ajax({
            data: {entrada: datos},
            url: 'back/transposicion_rollBack_matriz.php',
            type: 'post',
            success: function(response){
                alert(response);
            }
        });
    });
});
