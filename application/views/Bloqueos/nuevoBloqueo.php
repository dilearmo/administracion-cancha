    <script type="text/javascript">
/* global $ */
/* global location */

    $(document).ready(function() {
        
        
    setMinimos();    
     $( "#drop" ).hide(); 
   $("#Fecha").bind("change paste keyup", function() {
   return obtenerHoras(); 
});


function obtenerHoras() {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsBloqueo/bloqueables?fecha='+$("#Fecha").val(),
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
           $("#drop").empty();
            var $opcion0 = $("<option>", {"class": "btn-floating btn-large waves-effect waves-light red", "on":"true",  "disabled": "true",  "selected": "true"});
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
     var $opcion = $("<option>");
     var $valor = dato.Hora;
     $opcion.html(dato.Hora +" horas");
     $( "#drop" ).append($opcion);
     $( "#drop" ).show();
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
            <h4 id='titulo'>Crear Bloqueo</h4>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/Bloqueos/agregar">
                <div class="row">
                    
                    <div class="input-field col s12">
                <div class="col s6">        
                  <p>Fecha de bloqueo</p> 
                  </div>
                   <div class="col s6" >
                <input name="Fecha" required id="Fecha" type="date" class="validate">
                   </div>
                    </div>
                    
                    <div class="input-field col s12">
                <div class="col s6">        
                  <p>Hora de bloqueo</p> 
                  </div>
                   <div class="col s6" >
                <select id="drop" on required class="browser-default" name="hora">
                   </select>
                   </div>
                    </div>
                    
                    
                  <div class="input-field col s12">
                <div class="col s6">        
                 <button type="submit" class="btn bloquearBtn">Crear</button>
                  </div>
                   <div class="col s6" >
                   </select>
                   </div>
                    </div>
                    
                  </div>
               </form>
            </div>
       
