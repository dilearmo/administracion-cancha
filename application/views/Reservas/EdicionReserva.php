
    <script type="text/javascript">
/* global $ */
/* global location */
/* global Request */
 var id = 0;
 var horilla = 0;
    $(document).ready(function() {
     obtenerID();
      setMinimos();   
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

  function setMinimos() {
    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("Fecha").setAttribute("min", today);
}

     
 

    </script>
       <style type="text/css">
        #titulo {
              color: #f2f2f2; background: #ff4a4a; font-size: 75px; line-height: 74px; font-weight: 700; margin: 0 5px 24px; padding: 10px; margin: 0 5px 24px; font-family: 'Libre Baskerville', serif;
        }
    </style>
        <div class="container">
            <h4>Datos de la Reserva</h4>
             <form  id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/Reservas/reservaEdicion">
                <div class="row">
                    
                <div class="input-field col s12">
                <div class="col s6">        
                <p>Fecha</p> 
                </div>
                <div class="col s6" >
                <input name="Fecha" required id="Fecha" type="date" class="validate"> 
                </div>
                </div>
                    
                     <div class="input-field col s12">
                <div class="col s6">        
                  <p>Cantidad de Jugadores</p> 
                  </div>
                   <div class="col s6" >
                  <input min="8" max="16" name="Jugadores" required id="Jugadores" type="number" class="validate"> 
                   </div>
                    </div>   
               
                <div class="input-field col s12">
                <div class="col s6">        
                  <p>Nombre del equipo</p> 
                  </div>
                   <div class="col s6" >
                  <input name="Equipo" required id="Equipo" type="text" class="validate">
                   </div>
                    </div>
                    
                    
                          <div class="input-field col s12">
                <div class="col s6">        
                  <p>Encargado de la reserva</p> 
                  </div>
                   <div class="col s6" >
                     <select id="dropUsers" required on  class="browser-default" name="dropUsers">
                </select>
                   </div>
                    </div>  
                         <div class="input-field col s12">
                <div class="col s6">        
                  <p>Hora de reserva</p> 
                  </div>
                   <div class="col s6" >
                    <select id="drop" on  class="browser-default" name="hora">
                   </select>
                   </div>
                    </div> 
                    
                    
                    
                <div class="input-field col s12">
                <div class="col s6">        
                  <p>Notas</p> 
                  </div>
                   <div class="col s6" >
                     <input name="desc"  id="desc" type="text" class="validate">
                   </div>
                    </div>  
                    
                     
                   
                   
                <div class="input-field col s12">
                <div class="col s12" style="text-align: center">        
                  <button id="btn" type="submit" class="btn bloquearBtn">Actualizar<i class="material-icons right">mode_edit</i></button>
                  </div>
                   
                    </div>  
                   
                   
                   
                  </div>
                    <input hidden name="dropUsuarioComodin"  id="dropUsuarioComodin" type="text">
                    <input hidden name="dropReservaComodin"  id="dropReservaComodin" type="text">
               </form>
                <div class="col s12">
                <div class="col s3" style="text-align: center">   
                  <button id="btnCancelar" onclick="eliminar()" class="btn  bloquearBtn">Cancelar<i class="material-icons right">thumb_down</i></button>
                  </div>
                  
                    </div>  
            </div>