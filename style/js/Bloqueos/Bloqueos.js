/* global $ */
/* global location */

    var contador = 0;
    
$(document).ready(function() {

 return llenarPrecios(); 
  
});





function llenarPrecios() {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsBloqueo/bloqueo',
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
           
            for (var i = 0; i < response.length; i++ ) {
                llenar(response[i]);
            }    
             
            
             
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});
}

function llenar (dato) {
     var $tr = $("<tr>");
     var $fecha = $("<td>");
     var $Hora = $("<td>");
     var $dia = $("<td>");
     var $cancelar = $("<td>", {"class":" center-align"});
     var $boton = $("<button>", {id:dato.id, "class": "btn-floating btn-large waves-effect waves-light red", "type": "button",  "value": "Cancelar",  "onclick": "eliminar(this.id)"});
     
   
     var iconoEditar = $("<i>", {"class":"material-icons"});
      

   iconoEditar.html("delete_forever");
   $boton.append(iconoEditar);
   $fecha.html(dato.Fecha);
   $Hora.html(dato.Hora +":00");
   $dia.html(dato.NombreDia);
    $cancelar.append($boton);
    
    
   
     
     
     $tr.append($Hora);
   
    $tr.append($fecha);
    $tr.append($dia);
     $tr.append($cancelar);
    
    $( "#tabla" ).append($tr);
     
    
  
}


function eliminar(i) {
  $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsBloqueo/eliminar?id='+i,
             dataType: 'jsonp',
              timeout: 10000,
            success: function(response) {
           
               //alert(response);  
               location.reload();
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});
}

