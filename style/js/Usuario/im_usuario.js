/*
global $
global toastr
global location
*/

var base_url = 0;
$(document).ready(function() {
    
    base_url = $('#base_url').val(); // Obtiene el valor de la URL base
    
});

// Valida si el nombre de usuario existe mediante un web service
function existeNombreUsuario() {
    $('.bloquearBtn').attr('disabled', true);
    var nombreUsuario = $.trim($('#nombreUsuario').val());
    if(camposValidos(nombreUsuario)) { // Valida que los campos necesarios no estén vacíos
        $('#formNuevoUsuario').submit(); 
    } else {
        $('.bloquearBtn').attr('disabled', false);
        toastr.warning("Es necesario llenar todos<br>los campos");
    }
}


// Valda mediante un web service si la cédula ya existe en la base de datos
function existeCedula(cedula) {
    $.ajax({
        url: base_url + 'index.php/WSUsuario/existeCedulaUsuario?cedula=' + cedula,
        timeout: 10000,
        dataType: 'jsonp',
        success: function(result) {
            if(result == false) {
                $('#formNuevoUsuario').submit(); // Envía el formulario
            } else {
                toastr.error('La cédula ingresada ya existe');
            }
        },
        error: function() {
            toastr.warning('Hubo un problema al conectar<br>con la base de datos.<br>Por favor inténtelo de nuevo.');
        }
    });
}





function existeNombreUsuariooo() {
    alert(base_url);
    $('.bloquearBtn').attr('disabled', true);
    var nombreUsuario = $.trim($('#nombreUsuario').val());
    if(camposValidos(nombreUsuario)) { // Valida que los campos necesarios no estén vacíos
       // if(compararContrasenas()) { // Valida si las contraseñas son iguales
            $.ajax({
                url: base_url + 'index.php/WSUsuario/existeNombreUsuario?nombreUsuario='+nombreUsuario,
                timeout: 10000,
                success: function(result) {
                    if(result == true) {
                        $('.bloquearBtn').attr('disabled', false);
                        toastr.error('El nombre de usuario ya existe');
                    }else{
                        toastr.error('submiiiiiit');
                        $('#formNuevoUsuario').submit(); // Envía el formulario
                    }
                },
                error: function() {
                    alert(base_url);
                    $('.bloquearBtn').attr('disabled', false);
                    toastr.warning('Hubo un problema al conectar<br>con la base de datos.<br>Por favor inténtelo de nuevo.');
                }
            });
       /* } else {
            $('.bloquearBtn').attr('disabled', false);
            toastr.error('Las contraseñas no<br>coinciden');
        }*/
    } else {
        $('.bloquearBtn').attr('disabled', false);
        toastr.warning("Es necesario llenar todos<br>los campos");
    }
}


function camposValidos(nombreUsuario) {
    if(nombreUsuario.length > 0 && $.trim($('#nombre').val()).length > 0 && $.trim($('#apellidos').val()).length > 0 
        && $.trim($('#telefono').val()).length > 0 && $.trim($('#correo').val()).length > 0 && $("#contrasena").val() != 0) {
        return true;
    } else {
        return false;
    }
}

// Valida si el nombre de usuario existe al dejar el input (evento blur)
function existeNombreUsuarioBlur() {
    var nombreUsuario = $.trim($('#nombreUsuario').val());
    $.ajax({
        url: base_url + 'index.php/WSUsuario/existeNombreUsuario?nombreUsuario='+nombreUsuario,
        timeout: 10000,
        dataType: 'jsonp',
        success: function(result) {
            if(result == true) {
                toastr.error('El nombre de usuario ya existe');
                 $('.bloquearBtn').attr('disabled', true);
            }else {
                 $('.bloquearBtn').attr('disabled', false);
            }
        },
        error: function() {
            toastr.warning('Hubo un problema al conectar<br>con la base de datos.<br>Por favor inténtelo de nuevo.');
        }
    });
}