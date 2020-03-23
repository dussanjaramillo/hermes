$(document).ready(function(){
     $('#acceso').click(function(e){
        e.preventDefault();
        var usuario = 'juan.dussan';
        var password = 'Ju4nDuss4n';
        if (usuario.localeCompare($.trim($("#user").val())) == 0) {
            if(password.localeCompare($.trim($("#pass").val())) == 0) {
                window.location.href = "inicio.php";
            } else {
                alert('La contraseña es incorrecta')
            }

        } else {
            alert('El usuario no existe')
        }
    });
});
