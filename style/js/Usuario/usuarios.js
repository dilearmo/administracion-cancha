/*
global $
global base_url
global location
global toastr
*/
var base_url;
 
  $(document).ready(function() {
   // $('select').material_select();
       base_url = $('#base_url').val();
   
     $('#cuerpoTabla :checkbox').change(function () {
        if ($(this).is(':checked')) {
            modificarHabilitarUsuario($(this).val(), 1);
        } else {
            modificarHabilitarUsuario($(this).val(), 0);
        }
    });
  });
       


function eliminarUsuario(nombreUsuario) {
    $.ajax({
        url: base_url + 'WSUsuario/eliminarUsuario?nombreUsuario=' + nombreUsuario,
        dataType: 'jsonp',
        timeout: 10000,
        success: function (result) {
            if(result != false) {
                location.reload(true);
            } else {
                toastr.error("Error al eliminar el usuario");
            }
        },
        error: function () {
            toastr.error("Error de conexion con el servidor");
        }
    });
}

function modificarHabilitarUsuario(nombreUsuario, valor) {
    $.ajax({
        url: base_url + 'index.php/WSUsuario/actualizarHabilitar?NombreUsuario=' + nombreUsuario + '&habilitado=' + valor,
        timeout: 10000,
        dataType: 'jsonp',
        success: function(respose) {
            if(valor == 1)
                toastr.info('El usuario ' + nombreUsuario + '<br>ha sido habilitado.');
            if(valor == 0)
                toastr.info('El usuario ' + nombreUsuario + '<br>ha sido deshabilitado.');
        },
        error: function(x,y,z) {
            if(valor == 1)
                toastr.error('Error al habilitar al usuario');
            if(valor == 0)
                toastr.error('Error al deshabilitar al usuario');
        }
    });
}
