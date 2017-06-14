
    <script type="text/javascript">
/* global $ */
/* global location */
/* global Request */
 var id = 0;
 var horilla = 0;
    $(document).ready(function() {
     obtenerID();
        
   $("#Fecha").bind("change paste keyup", function() {
   return obtenerHoras(); 
  
});

});
function obtenerUsuarios() {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsReservas/usuarios',
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
          $("#dropUsers").empty();
          llenarDatosUsuario()
           
            for (var i = 0; i < response.length; i++ ) {
                llenarUsuario(response[i]);
            }    
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});
}

function llenarUsuario (dato) {
     
     var $valor = dato.IdUsuario;
     var $opcion = $("<option>", {"class": "btn-floating btn-large waves-effect waves-light", "value":$valor});
     $opcion.html(dato.Nombre + " " + dato.Apellidos);
     $( "#dropUsers" ).append($opcion);
     
}


function obtenerHoras() {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsBloqueo/bloqueables?fecha='+$("#Fecha").val(),
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
           $("#drop").empty();
            
           llenarDatosReserva()
            
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
     var $valor = dato.Hora;
     var $opcion = $("<option>", {"class": "btn-floating btn-large waves-effect waves-light", "value":$valor});
     $opcion.html($valor +" horas");
     $( "#drop" ).append($opcion);
}

function obtenerID() {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsReservas/getSesion',
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
           
           id= response;
           obtenerUsuarios();
           llenarDatosReservaPrimera();
           
         
           $( "#btn" ).attr( "id", response);
        
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
}); 
}


function llenarDatosReserva() {
     var $opcion0 = $("<option>", {id:"opHora","class": "btn-floating btn-large waves-effect waves-light", "on":"true",  "disabled": "true",  "selected": "true"});
   $( "#drop" ).append($opcion0);
     $('#opHora').html( horilla + " horas") ;
}
function llenarDatosReservaPrimera() {
     var $opcion0 = $("<option>", {id:"opHora","class": "btn-floating btn-large waves-effect waves-light", "on":"true",  "disabled": "true",  "selected": "true"});
   $( "#drop" ).append($opcion0);
    
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsReservas/ReservaXid?idReserva='+id,
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
          $('#Jugadores').val( response[0].CantidadDeJugadores);
          $('#Equipo').val( response[0].Mi_Equipo);
          $('#Fecha').val( response[0].Fecha);
          $('#desc').val( response[0].Notas);
           $('#opHora').html(response[0].Hora + " horas");
           $('#opHora').val( response[0].Hora);
           horilla =  response[0].Hora;
              $( "#dropReservaComodin" ).attr( "value", response[0].Hora);
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});  
    
    
}
function llenarDatosUsuario() {
     var $opcion0 = $("<option>", {id: "opUser","class": "btn-floating btn-large waves-effect waves-light", "on":"true",  "disabled": "true",  "selected": "true"});
     $( "#dropUsers" ).append($opcion0);
      
     $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsReservas/usuarioXreserva?idReserva='+id,
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
                
             $('#opUser').html(response[0].Nombre + "  " + response[0].Apellidos)
              $('#opUser').val(response[0].IdUsuario)  
               $( "#dropUsuarioComodin" ).attr( "value", response[0].IdUsuario);
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});  
     

     
}

   function eliminar() {
  $(function() {
  
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsReservas/eliminar?id='+id,
             dataType: 'jsonp',
              timeout: 10000,
            success: function(response) {
           
               //alert(response);  
               document.location.href="https://cancha-la-primavera-dilearmo.c9users.io/index.php/reservas"
            },
            error: function(error) {
                alert('error');
            }
        });
   
});
}  
 

    </script>
    
        <div class="container">
            <h1>Crear Bloqueo</h1>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/Reservas/reservaEdicion">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Fecha" required id="Fecha" type="date" class="validate">
                        
                    </div>
                    <div class="input-field col s12">
                        <input name="Jugadores" required id="Jugadores" type="number" class="validate">
                        
                    </div>
                    <div class="input-field col s12">
                        <input name="Equipo" required id="Equipo" type="text" class="validate">
                        
                    </div>
                   <div class="input-field col s12">
                   <select id="dropUsers" on  class="browser-default" name="usuarios">
                   
                           
                                  
                   </select>
                    </div>
                    
                    <div class="input-field col s12">
                   <select id="drop" on  class="browser-default" name="hora">
                   
                           
                                  
                   </select>
                    </div>
                      <div class="input-field col s12">
                        <input name="desc" required id="desc" type="text" class="validate">
                        
                    </div>
                   <div class="input-field col s12 ">
                   <button id="btn" type="submit" class="btn bloquearBtn">Actualizar</button>
                   
                   </div>
                      
                        <input hidden name="dropUsuarioComodin" required id="dropUsuarioComodin" type="text" class="validate">
                        
                   
                      
                        <input hidden name="dropReservaComodin" required id="dropReservaComodin" type="text" class="validate">
                        
                   
                  </div>
               </form>
               <button id="btnCancelar" onclick="eliminar()" class="btn bloquearBtn">Cancelar</button>
            </div>