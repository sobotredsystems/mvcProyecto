function verifica(){
    var email = $("#txtEmail").val();
    var password = $("#txtPassword").val();
    $.ajax({
        url:'controlador/controlador_verifica_usuario.php',
        type:'POST',
        data:{
            email:email,
            password:password
        }
        
    }).done(function(respuesta){
        alert(respuesta);
    })
}
