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
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsReservas/reservas',
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
     var $boton = $("<button>", {id:dato.idReserva, "class": "btn-floating btn-large waves-effect waves-light red", "type": "button",  "value": "Cancelar",  "onclick": "eliminar(this.id)"});
     var $Jugadores = $("<td>");
      var $Equipo = $("<td>");
      var $Rival = $("<td>");
      var $btnEditar = $("<button>", {id:dato.idReserva, "class": "btn-floating btn-large waves-effect waves-light green", "type": "button",  "value": "Editar",  "onclick": "editar(this.id)"});  
   var $editar = $("<td>", {"class":" center-align"});
   var iconoEliminar = $("<i>", {"class":"material-icons"});
  var iconoEditar = $("<i>", {"class":"material-icons"});
      $boton.append(iconoEliminar);
      $btnEditar.append(iconoEditar);
      iconoEditar.html("edit");
       iconoEliminar.html("delete_forever");
       $Jugadores.html(dato.CantidadDeJugadores);
       $Equipo.html(dato.Mi_Equipo);
       
         var $btnDetalles = $("<button>", {id:dato.idReserva, "class": "btn-floating btn-large waves-effect waves-light green", "type": "button",  "value": "Editar",  "onclick": "detalles(this.id)"});   
         var iconodetalle = $("<i>", {"class":"material-icons"});
          var $detalle = $("<td>", {"class":" center-align"});
         $btnDetalles.append(iconodetalle);
         iconodetalle.html("description");
         
    $fecha.html(dato.Fecha);
    $Hora.html(dato.Hora +":00");
    $dia.html(dato.NombreDia);
    $cancelar.append($boton);
    $editar.append($btnEditar);
    $detalle.append($btnDetalles);
    $tr.append($Hora);
    $tr.append($fecha);
    $tr.append($dia);
    $tr.append($Jugadores);
    $tr.append($Equipo);
    $tr.append($detalle);
    $tr.append($editar);
    $tr.append($cancelar);
    $( "#tabla" ).append($tr);
}


function eliminar(i) {
  $(function() {
  
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsReservas/eliminar?id='+i,
             dataType: 'jsonp',
              timeout: 10000,
            success: function(response) {
           
               //alert(response);  
               location.reload();
            },
            error: function(error) {
                alert('error');
            }
        });
   
});
}

function editar(i) {
window.location.replace("https://cancha-la-primavera-dilearmo.c9users.io/index.php/Reservas/VerReservas?id="+i);
}

function detalles(i) {
window.location.replace("https://cancha-la-primavera-dilearmo.c9users.io/index.php/Reservas/detalleReserva?Id="+i);
}