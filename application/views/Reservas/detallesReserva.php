
     <link href="<?=base_url()?>style/css/Reservas/detallesReservas.css" type="text/css" rel="stylesheet">
     <script type="text/javascript" src="<?=base_url()?>style/js/Usuario/usuarios.js"></script>
     
		<div class="container-2_0" >
            <?php
                if(!empty($datosReserva)) {
            ?>
    		    <div class="row" style="margin-bottom: 0px; padding-top:100px;">
    		        <div class="col s6">
    		              <h4>Detalles de la Reservación</h4>
    		        </div>
    		        <div class="col s6">
    		              <h4>Reservación: <?= $datosReserva-> Fecha?></h4>
    		        </div>
                </div>
                 <div>
                       <table>
                          <tr>
                            <th>Estado</th>
                             <?php
                                if(!empty($datosReserva->esta_cancelada == 1)) {
                            ?>
                            <td>Cancelada</td>
                             <?php
                                } else {
                             ?>
                             <td>Activa</td>
                             <?php
                                }
                             ?>
                            <th>Resposable</th>
                            <td><?= $datosReserva-> Nombre?> <?= $datosReserva-> Apellidos?></td>
                          </tr>
                          <tr>
                            <th>Teléfono</th>
                            <td><?= $datosReserva-> Telefono?></td>
                            <th>Hora Reservada</th>
                            <td><?= $datosReserva-> Hora?>:00 Horas</td>
                          </tr>
                          <tr>
                            <th>Nombre del Equipo</th>
                            <td><?= $datosReserva-> Mi_Equipo?></td>
                            <th>Equipo Rival</th>
                            <td><?= $datosReserva-> Equipo_rival?></td>
                          </tr>
                          <tr>
                             <th>Cantidad de Jugadores</th>
                            <td><?= $datosReserva-> CantidadDeJugadores?></td>
                            <th>Total a Pagar</th>
                            <td><?= $datosReserva-> Precio?></td>
                          </tr>
    
                        </table>
                    <?php
                        } else {
                            echo '<h3>No hay detalles asociados</h3>';    
                        }
                    ?>
            </div>  
        </div>