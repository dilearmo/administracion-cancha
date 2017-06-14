
<meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">

<link rel="stylesheet" href="../style/css/Horas/horas.css" type="text/css" />

<script type="text/javascript" src="<?=base_url()?>/style/js/Reservas/reservas.js"></script>

    <div style="height:40px;">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </div>    
        <div class="container ">
            <div class="row"style="margin-bottom:30px" id="rowTopTable">
                <h5 class="col m4">Reservas</h5>
                <a href="https://cancha-la-primavera-dilearmo.c9users.io/index.php/Reservas/NuevaReservas" class="col m2 offset-m6 btn waves-effect waves-light" id="agregarHora">
                    Agregar
                    <i class="material-icons">add</i>
                </a>
            </div>
            <div id="scrollHoras">
            <table >
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Dia</th>
                        <th>Jugadores</th>
                        <th>Equipo</th>
                        <th style="text-align:center;">Detalle</th>
                        <th style="text-align:center;">Editar</th>
                      
                        <th style="text-align:center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="tabla">
                    
                    
                </tbody>
            </table>
             </div>
        </div>
    
</html> 