function registro(){
    var nombre = document.forms[0].nombre.value;
    var apellido = document.form_registro.apellido.value;
    const email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    console.log(nombre,apellido,email,password);

    if(nombre==""){
        document.getElementById("error_nombre").innerHTML = "El nombre es obligatorio"
    }
    if(password!=secondPassword){
        document.getElementById("error_password2").innerHTML = "Las contraseñas no coinciden"
    }
}
$(document).ready(function() {
    $("#form_login").submit(function(){
        var email = $("#email").val();
        var password =  $("#password").val();
        if(email==""){
            $("#email").addClass("input_form_error");
            $("#error_email").html("El campo mail es obligatorio");
        }else{
            $("#email").removeClass("input_form_error");
            $("#error_email").html("");
        }
        if(password==""){
            $("#password").addClass("input_form_error");
            $("#error_password").html("Completá tu clave");
        }else{
            $("#password").removeClass("input_form_error");
            $("#error_password").html("");
        }

        return false;
    })

/*$("#email").keyup(function(e){
    console.log(e.which)
    if($(this).val()==""){
        $("#email").addClass("input_form_error"); 
    }else{
        $("#email").removeClass("input_form_error");
    }
})*/
})