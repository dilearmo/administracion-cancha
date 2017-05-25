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
            if(compararContrasenas()) { // Valida si las contraseñas son iguales
                if(validarCorreo()) {
                    $('#formNuevoUsuario').submit();
                } else { // Si el correo no es válido
                    $('.bloquearBtn').attr('disabled', false);
                    toastr.warning('Correo no válido');
                }
            } else {
                $('.bloquearBtn').attr('disabled', false);
                toastr.warning("Las contraseñas ingresadas no coinciden");
            }
        } else {
            $('.bloquearBtn').attr('disabled', false);
            toastr.warning("Es necesario llenar todos<br>los campos");
        }
    }
    
    function compararContrasenas() {
        if($.trim($('#contrasena').val()) == $.trim($('#contrasena2').val())) {
            return true;
        } else {
            return false;
        }
    }
    
    // Valida el correo
    function validarCorreo() {
        if($.trim($('#correo').val()).length > 0) {
            var x = $.trim($('#correo').val());
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                return false;
            }
        }
        return true;
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