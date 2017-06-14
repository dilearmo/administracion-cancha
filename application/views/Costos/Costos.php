    <link rel="stylesheet" href="<?=base_url()?>/style/css/Horas/horas.css" type="text/css" />
    <script type="text/javascript" src="<?=base_url()?>/style/js/Costos/Costos.js"></script>
       <style type="text/css">
        #titulo {
              color: #f2f2f2; background: #ff4a4a; font-size: 75px; line-height: 74px; font-weight: 700; margin: 0 5px 24px; padding: 10px; margin: 0 5px 24px; font-family: 'Libre Baskerville', serif;
        }
    </style>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <div style="height:40px;">
    
    </div>
    
       
      <?php  echo form_open('Costos/aceptarCambios',array('id'=>'formulario','method'=>'post')) ?>
    <div class="container scroll">
        <div class="row" id="rowTopTable">
            <h5  class="col m4">Cambio de costos</h5>
        </div>
        
        <ul class="collapsible" data-collapsible="accordion">
   
   <li>
    <div class="collapsible-header"><i class="material-icons">event</i>Lunes</div>
    <div class="  collapsible-body">
        <div class=" row">

            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00am</td>
                            <td>
                                <input required disabled name="1.1" id="1.1" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00am</td>
                            <td>
                                <input required disabled name="1.2" id="1.2" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00am</td>
                            <td>
                                <input required disabled name="1.3" id="1.3" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00am</td>
                            <td>
                                <input required disabled name="1.4" id="1.4" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00am</td>
                            <td>
                                <input required disabled name="1.5" id="1.5" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00am</td>
                            <td>
                                <input required disabled name="1.6" id="1.6" type="number" class="validate">
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr class="columnas">
                            <th>Hora</th>
                            <th>Precio por hora</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00pm</td>
                            <td>
                                <input required disabled name="1.7" id="1.7" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>1:00pm</td>
                            <td>
                                <input required disabled name="1.8" id="1.8" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>2:00pm</td>
                            <td>
                                <input required disabled name="1.9" id="1.9" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>3:00pm</td>
                            <td>
                                <input required disabled name="1.10" id="1.10" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>4:00pm</td>
                            <td>
                                <input required disabled name="1.11" id="1.11" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>5:00pm</td>
                            <td>
                                <input required disabled name="1.12" id="1.12" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00pm</td>
                            <td>
                                <input required disabled name="1.13" id="1.13" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00pm</td>
                            <td>
                                <input required disabled name="1.14" id="1.14" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00pm</td>
                            <td>
                                <input required disabled name="1.15" id="1.15" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00pm</td>
                            <td>
                                <input required disabled name="1.16" id="1.16" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00pm</td>
                            <td>
                                <input required disabled name="1.17" id="1.17" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00pm</td>
                            <td>
                                <input required disabled name="1.18" id="1.18" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</li>

<li>
    <div class="collapsible-header"><i class="material-icons">event</i>Martes</div>
    <div class="  collapsible-body">
        <div class=" row">

            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00am</td>
                            <td>
                                <input required disabled name="2.1" id="2.1" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00am</td>
                            <td>
                                <input required disabled name="2.2" id="2.2" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00am</td>
                            <td>
                                <input required disabled name="2.3" id="2.3" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00am</td>
                            <td>
                                <input required disabled name="2.4" id="2.4" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00am</td>
                            <td>
                                <input required disabled name="2.5" id="2.5" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00am</td>
                            <td>
                                <input required disabled name="2.6" id="2.6" type="number" class="validate">
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr class="columnas">
                            <th>Hora</th>
                            <th>Precio por hora</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00pm</td>
                            <td>
                                <input required disabled name="2.7" id="2.7" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>1:00pm</td>
                            <td>
                                <input required disabled name="2.8" id="2.8" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>2:00pm</td>
                            <td>
                                <input required disabled name="2.9" id="2.9" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>3:00pm</td>
                            <td>
                                <input required disabled name="2.10" id="2.10" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>4:00pm</td>
                            <td>
                                <input required disabled name="2.11" id="2.11" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>5:00pm</td>
                            <td>
                                <input required disabled name="2.12" id="2.12" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00pm</td>
                            <td>
                                <input required disabled name="2.13" id="2.13" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00pm</td>
                            <td>
                                <input required disabled name="2.14" id="2.14" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00pm</td>
                            <td>
                                <input required disabled name="2.15" id="2.15" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00pm</td>
                            <td>
                                <input required disabled name="2.16" id="2.16" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00pm</td>
                            <td>
                                <input required disabled name="2.17" id="2.17" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00pm</td>
                            <td>
                                <input required disabled name="2.18" id="2.18" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</li>

<li>
    <div class="collapsible-header"><i class="material-icons">event</i>Miercoles</div>
    <div class="  collapsible-body">
        <div class=" row">

            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00am</td>
                            <td>
                                <input required disabled name="3.1" id="3.1" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00am</td>
                            <td>
                                <input required disabled name="3.2" id="3.2" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00am</td>
                            <td>
                                <input required disabled name="3.3" id="3.3" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00am</td>
                            <td>
                                <input required disabled name="3.4" id="3.4" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00am</td>
                            <td>
                                <input required disabled name="3.5" id="3.5" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00am</td>
                            <td>
                                <input required disabled name="3.6" id="3.6" type="number" class="validate">
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr class="columnas">
                            <th>Hora</th>
                            <th>Precio por hora</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00pm</td>
                            <td>
                                <input required disabled name="3.7" id="3.7" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>1:00pm</td>
                            <td>
                                <input required disabled name="3.8" id="3.8" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>2:00pm</td>
                            <td>
                                <input required disabled name="3.9" id="3.9" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>3:00pm</td>
                            <td>
                                <input required disabled name="3.10" id="3.10" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>4:00pm</td>
                            <td>
                                <input required disabled name="3.11" id="3.11" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>5:00pm</td>
                            <td>
                                <input required disabled name="3.12" id="3.12" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00pm</td>
                            <td>
                                <input required disabled name="3.13" id="3.13" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00pm</td>
                            <td>
                                <input required disabled name="3.14" id="3.14" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00pm</td>
                            <td>
                                <input required disabled name="3.15" id="3.15" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00pm</td>
                            <td>
                                <input required disabled name="3.16" id="3.16" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00pm</td>
                            <td>
                                <input required disabled name="3.17" id="3.17" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00pm</td>
                            <td>
                                <input required disabled name="3.18" id="3.18" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</li>

<li>
    <div class="collapsible-header"><i class="material-icons">event</i>Jueves</div>
    <div class="  collapsible-body">
        <div class=" row">

            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00am</td>
                            <td>
                                <input required disabled name="4.1" id="4.1" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00am</td>
                            <td>
                                <input required disabled name="4.2" id="4.2" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00am</td>
                            <td>
                                <input required disabled name="4.3" id="4.3" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00am</td>
                            <td>
                                <input required disabled name="4.4" id="4.4" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00am</td>
                            <td>
                                <input required disabled name="4.5" id="4.5" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00am</td>
                            <td>
                                <input required disabled name="4.6" id="4.6" type="number" class="validate">
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr class="columnas">
                            <th>Hora</th>
                            <th>Precio por hora</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00pm</td>
                            <td>
                                <input required disabled name="4.7" id="4.7" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>1:00pm</td>
                            <td>
                                <input required disabled name="4.8" id="4.8" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>2:00pm</td>
                            <td>
                                <input required disabled name="4.9" id="4.9" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>3:00pm</td>
                            <td>
                                <input required disabled name="4.10" id="4.10" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>4:00pm</td>
                            <td>
                                <input required disabled name="4.11" id="4.11" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>5:00pm</td>
                            <td>
                                <input required disabled name="4.12" id="4.12" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00pm</td>
                            <td>
                                <input required disabled name="4.13" id="4.13" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00pm</td>
                            <td>
                                <input required disabled name="4.14" id="4.14" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00pm</td>
                            <td>
                                <input required disabled name="4.15" id="4.15" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00pm</td>
                            <td>
                                <input required disabled name="4.16" id="4.16" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00pm</td>
                            <td>
                                <input required disabled name="4.17" id="4.17" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00pm</td>
                            <td>
                                <input required disabled name="4.18" id="4.18" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</li>

<li>
    <div class="collapsible-header"><i class="material-icons">event</i>Viernes</div>
    <div class="  collapsible-body">
        <div class=" row">

            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00am</td>
                            <td>
                                <input required disabled name="5.1" id="5.1" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00am</td>
                            <td>
                                <input required disabled name="5.2" id="5.2" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00am</td>
                            <td>
                                <input required disabled name="5.3" id="5.3" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00am</td>
                            <td>
                                <input required disabled name="5.4" id="5.4" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00am</td>
                            <td>
                                <input required disabled name="5.5" id="5.5" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00am</td>
                            <td>
                                <input required disabled name="5.6" id="5.6" type="number" class="validate">
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr class="columnas">
                            <th>Hora</th>
                            <th>Precio por hora</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00pm</td>
                            <td>
                                <input required disabled name="5.7" id="5.7" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>1:00pm</td>
                            <td>
                                <input required disabled name="5.8" id="5.8" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>2:00pm</td>
                            <td>
                                <input required disabled name="5.9" id="5.9" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>3:00pm</td>
                            <td>
                                <input required disabled name="5.10" id="5.10" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>4:00pm</td>
                            <td>
                                <input required disabled name="5.11" id="5.11" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>5:00pm</td>
                            <td>
                                <input required disabled name="5.12" id="5.12" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00pm</td>
                            <td>
                                <input required disabled name="5.13" id="5.13" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00pm</td>
                            <td>
                                <input required disabled name="5.14" id="5.14" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00pm</td>
                            <td>
                                <input required disabled name="5.15" id="5.15" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00pm</td>
                            <td>
                                <input required disabled name="5.16" id="5.16" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00pm</td>
                            <td>
                                <input required disabled name="5.17" id="5.17" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00pm</td>
                            <td>
                                <input required disabled name="5.18" id="5.18" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</li>

<li>
    <div class="collapsible-header"><i class="material-icons">event</i>Sábado</div>
    <div class="  collapsible-body">
        <div class=" row">

            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00am</td>
                            <td>
                                <input required disabled name="6.1" id="6.1" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00am</td>
                            <td>
                                <input required disabled name="6.2" id="6.2" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00am</td>
                            <td>
                                <input required disabled name="6.3" id="6.3" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00am</td>
                            <td>
                                <input required disabled name="6.4" id="6.4" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00am</td>
                            <td>
                                <input required disabled name="6.5" id="6.5" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00am</td>
                            <td>
                                <input required disabled name="6.6" id="6.6" type="number" class="validate">
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr class="columnas">
                            <th>Hora</th>
                            <th>Precio por hora</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00pm</td>
                            <td>
                                <input required disabled name="6.7" id="6.7" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>1:00pm</td>
                            <td>
                                <input required disabled name="6.8" id="6.8" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>2:00pm</td>
                            <td>
                                <input required disabled name="6.9" id="6.9" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>3:00pm</td>
                            <td>
                                <input required disabled name="6.10" id="6.10" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>4:00pm</td>
                            <td>
                                <input required disabled name="6.11" id="6.11" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>5:00pm</td>
                            <td>
                                <input required disabled name="6.12" id="6.12" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00pm</td>
                            <td>
                                <input required disabled name="6.13" id="6.13" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00pm</td>
                            <td>
                                <input required disabled name="6.14" id="6.14" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00pm</td>
                            <td>
                                <input required disabled name="6.15" id="6.15" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00pm</td>
                            <td>
                                <input required disabled name="6.16" id="6.16" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00pm</td>
                            <td>
                                <input required disabled name="6.17" id="6.17" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00pm</td>
                            <td>
                                <input required disabled name="6.18" id="6.18" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</li>

<li>
    <div class="collapsible-header"><i class="material-icons">event</i>Domingo</div>
    <div class="  collapsible-body">
        <div class=" row">

            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00am</td>
                            <td>
                                <input required disabled name="7.1" id="7.1" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00am</td>
                            <td>
                                <input required disabled name="7.2" id="7.2" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00am</td>
                            <td>
                                <input required disabled name="7.3" id="7.3" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00am</td>
                            <td>
                                <input required disabled name="7.4" id="7.4" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00am</td>
                            <td>
                                <input required disabled name="7.5" id="7.5" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00am</td>
                            <td>
                                <input required disabled name="7.6" id="7.6" type="number" class="validate">
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr class="columnas">
                            <th>Hora</th>
                            <th>Precio por hora</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:00pm</td>
                            <td>
                                <input required disabled name="7.7" id="7.7" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>1:00pm</td>
                            <td>
                                <input required disabled name="7.8" id="7.8" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>2:00pm</td>
                            <td>
                                <input required disabled name="7.9" id="7.9" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>3:00pm</td>
                            <td>
                                <input required disabled name="7.10" id="7.10" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>4:00pm</td>
                            <td>
                                <input required disabled name="7.11" id="7.11" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>5:00pm</td>
                            <td>
                                <input required disabled name="7.12" id="7.12" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col m4">

                <table>
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Precio por hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>6:00pm</td>
                            <td>
                                <input required disabled name="7.13" id="7.13" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>7:00pm</td>
                            <td>
                                <input required disabled name="7.14" id="7.14" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>8:00pm</td>
                            <td>
                                <input required disabled name="7.15" id="7.15" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>9:00pm</td>
                            <td>
                                <input required disabled name="7.16" id="7.16" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>10:00pm</td>
                            <td>
                                <input required disabled name="7.17" id="7.17" type="number" class="validate">
                            </td>

                        </tr>
                        <tr>
                            <td>11:00pm</td>
                            <td>
                                <input required disabled name="7.18" id="7.18" type="number" class="validate">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</li>         

        </ul>
       
     
    </div>
    <div id="sessionSub" style="display:none">
    <div  id="outer">
     <div id="inner"><input  class="waves-effect waves-light btn" value="Enviar" type="submit"></input></div>
     </div>
     </div>
    <?php echo form_close(); ?>
     
      <div id="outer">
          <div id="inner"> <button class="waves-effect waves-light btn" id="btnEditar" onclick="return habilitar()"> Editar </button></div>
        </div>
         
    </html>