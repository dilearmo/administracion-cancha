/*
global $
global base_url
global location
global toastr
*/
var base_url;
 
  $(document).ready(function() {
   // $('select').material_select();
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
   
       base_url = $('#base_url').val();
       
        /* El sigueinte bloque de código se encarga de filtrar la tabla de usuarios*/
    /* ------------------- INICIO BLOQUE BÚSQUEDA -------------------------*/
    $('#noResultadosBusqueda').hide();
    
    $("#busquedaUsuarios").keyup(function () {
        var searchTerm = $("#busquedaUsuarios").val();
        var listItem = $('#tablaUsuarios tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
    $.extend($.expr[':'], {'containsi': function(elem, i, match, array) {
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }});
    
    $("#tablaUsuarios tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','false');
        $(this).hide();
    });

    $("#tablaUsuarios tbody tr:containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','true');
        $(this).show();
    });
    
    var jobCount = $('#tablaUsuarios tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');
    
    if(jobCount == '0') {
        $('#noResultadosBusqueda').show();
    } else {
        $('#noResultadosBusqueda').hide();
    }});
    
    /* ------------------- FIN BLOQUE BÚSQUEDA -------------------------*/
   
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
