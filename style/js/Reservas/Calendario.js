/* global $ */
/* global location */
/* global Request */
/* global multi */
    var today;
    var multi;
    
    $(document).ready(function() {
        
        multi = tomarFecha(getCookie('multi'));
        if (isNaN(multi)) { setCookie('multi', 0, 2); multi = 0; }
        
   obtenerHorasBloqueadas(multi);
   obtenerHorasreservadas(multi);
    setearFecha(multi);
   
   $( "#siguiente" ).click(function() {
          $("#anterior").prop("disabled",true);
       $("#siguiente").prop("disabled",true);
       multi++;
       setCookie('multi', multi, 2);
       limpiar();
  obtenerHorasBloqueadas(multi);
   obtenerHorasreservadas(multi);
   setearFecha(multi);
});

$( "#anterior" ).click(function() {
     $("#anterior").prop("disabled",true);
       $("#siguiente").prop("disabled",true);
    multi--;
    limpiar();
   obtenerHorasBloqueadas(multi);
   obtenerHorasreservadas(multi);
    setearFecha(multi);
});
   
});
function obtenerHorasBloqueadas(multi) {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsCalendario/bloqueos?fecha='+tomarFecha(multi),
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
         
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
      
      $("#"+dato.Hora).html('bloqueada');
    $("#"+dato.Hora).css("background-color","#e03d0f");
    $("#"+dato.Hora).css("color","white");
    $("#"+dato.Hora).css("text-align","center");
    $("#"+dato.Hora).css("font-weight","bolder");
}


function obtenerHorasreservadas(multi) {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsCalendario/reservas?fecha='+tomarFecha(multi),
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
          
            for (var i = 0; i < response.length; i++ ) {
                llenar(response[i]);
            }
              $("#anterior").prop("disabled",false);
              $("#siguiente").prop("disabled",false);
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});
}

function llenar (dato) {
    var $a = $("<a>", {"href":"https://cancha-la-primavera-dilearmo.c9users.io/index.php/Reservas/VerReservas?id="+dato.IdReserva+""});
    $("#"+dato.Hora).empty();
    $("#"+dato.Hora).append($a);
     $a.html('ocupada');
    $("#"+dato.Hora).css("background-color","#e0b310");
    $("#"+dato.Hora).css("color","white");
    $("#"+dato.Hora).css("text-align","center");
    $("#"+dato.Hora).css("font-weight","bolder");
}

function tomarFecha(multiplicador) {
   var today = new Date();
today.setDate(today.getDate() + multiplicador);   
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
}    

today = yyyy+'-'+mm+'-'+dd;


return today;

}

function siguiente() {
    
   setCookie('multi', multi+1, 2)
  location.reload();
}


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function limpiar() {
  for (var i = 6; i <= 23 ;i++ ) {
       $("#"+i).html('');
       $("#"+i).empty();
       $("#"+i).css("background-color","#3bce43");
       $("#"+i).html("disponible");
       $("#"+i).css("color","white");
       $("#"+i).css("text-align","center");
       $("#"+i).css("font-weight","bolder");
  }
   
}

function setearFecha(multi) {
   $("#fechaz").html("");
    $("#fechaz").html( tomarFecha(multi));
     
    
}





