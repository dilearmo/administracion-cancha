    <script type="text/javascript">
/* global $ */
/* global location */

    $(document).ready(function() {
        setMinimos();
     obtenerUsuarios();    
   $("#Fecha").bind("change paste keyup", function() {
   return obtenerHoras(); 
  
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
            var $opcion0 = $("<option>", {"class": "btn-floating btn-large waves-effect waves-light red", "on":"true",  "disabled": "true",  "selected": "true"});
            $opcion0.html(" Elija el Usuario"); 
            $( "#dropUsers" ).append($opcion0);
            for (var i = 0; i < response.length; i++ ) {
                llenarUsuario(response[i]);
            }    
              var $opcion0 = $("<option>", {"class": "btn-floating btn-large waves-effect waves-light", "on":"true",  "disabled": "true",  "selected": "true"});
            $opcion0.html(" Elija la hora"); 
            $( "#drop" ).append($opcion0);
            
             
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
            var $opcion0 = $("<option>", {"class": "btn-floating btn-large waves-effect waves-light", "on":"true",  "disabled": "true",  "selected": "true"});
            $opcion0.html(" Elija la hora"); 
            $( "#drop" ).append($opcion0);
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
});



    </script>
 
        <div class="container">
            <h4 id="titulo">Reservar</h4>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/Reservas/reservaNueva">
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
                  <input name="Jugadores" min="6" max="16" required id="Jugadores" type="number" class="validate">
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
                      <select id="dropUsers" required  on  class="browser-default" name="usuarios">
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
                      <input name="desc" required id="desc" type="text" class="validate">
                   </div>
                    </div>
                    
                   <div class="input-field col s12 ">
                   <button type="submit" class="btn bloquearBtn">Crear</button>
                   </div>
                  </div>
               </form>
            </div>