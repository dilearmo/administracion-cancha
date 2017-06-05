    /*
    global $
    global toastr
    global location
    */
    
    var base_url = 0;
    $(document).ready(function() {
         $('select').material_select();
        base_url = $('#base_url').val(); // Obtiene el valor de la URL base
        limpiarConsultas();
        document.getElementById('divtablaAdministradores').style.display="block";
    
    });
    
function mostrarConsulta(){
    limpiarConsultas();
    if($('#seleccinarConsulta').val() == 1){
       document.getElementById('divtablaAdministradores').style.display="block";
    }else if($('#seleccinarConsulta').val() == 2)
    {
       document.getElementById('divtablaUAplicacion').style.display="block";
         
    }else if($('#seleccinarConsulta').val() == 3)
    {
        document.getElementById('divtablaConfiables').style.display="block"; 
    }else if ($('#seleccinarConsulta').val() == 4)
    {
        document.getElementById('divtablaNoConfiables').style.display="block"; 
    }
}

function limpiarConsultas(){
    document.getElementById('divtablaAdministradores').style.display="none";
    document.getElementById('divtablaUAplicacion').style.display="none";
    document.getElementById('divtablaConfiables').style.display="none";        
    document.getElementById('divtablaNoConfiables').style.display="none";

}
