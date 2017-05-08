/*
global $
global base_url
global location
global toastr
*/

 
  $(document).ready(function() {
   // $('select').material_select();
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