
     <link href="<?=base_url()?>style/css/Usuario/listaUsuarios.css" type="text/css" rel="stylesheet">
     <script type="text/javascript" src="<?=base_url()?>style/js/Usuario/usuarios.js"></script>
     
	<body>
		<div class="container">
		    <div class="row" style="margin-bottom: 0px; padding-top:100px;">
		        <div class="col s6">
		              <h4>Mantenimiento Usuario</h4>
		        </div>
                <div class="col s6">
                    <div id="botonAgregar">
                         <a  class="waves-effect waves-light btn" 
                         href="<?=base_url()?>index.php/Usuarios/nuevoUsuario">
                           Agregar    <i class="material-icons">add</i>
                         </a>
                    </div>
                </div>
            </div>
            <div class="tableWrapper">
                <table class="table table-striped">
                     <?php
                        if(!empty($todosUsuarios)) {
                      ?>
                            <thead>
                                <tr>
                                    <th>Nombre de Usuario</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Rol</th>
                                    <th>Habilitado</th>
                                   <!-- <th>Eliminar</th> -->
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody id="cuerpoTabla">
                                <?php
                                    foreach($todosUsuarios as $usuario) {
                                ?>
                                <tr id="tr<?= $usuario->IdUsuario ?>">
                                    <td class="alinearCentro"><?= $usuario->NombreUsuario ?></td>
                                    <td><?= $usuario->Nombre ?> <?= $usuario->Apellidos ?></td>
                                    <td><?= $usuario->Correo ?></td>
                                    <td><?= $usuario->Telefono ?></td>
                                    <?php
                                        if($usuario->Es_administrador == 1) {
                                    ?>
                                    <td>Administrador</td>
                                    <?php
                                        }else{
                                    ?>
                                    <td>Usuario</td>
                                    <?php
                                        }
                                    ?>
                                    
                                 <!--  </?php
                                        if($usuario->Es_confiable == 1) {
                                    ?>
                                    <td class="alinearCentro">Sí</td>
                                    </?php
                                        }else{
                                    ?>
                                    <td class="alinearCentro">No</td>
                                    </?php
                                        }
                                    ?>
                                    
                                    -->
                                    
                                    
                                    <td class="checkHabilitado">
                                        <?php
                                            if($usuario->habilitado == 1) {
                                        ?>
                                            <input checked type="checkbox" id="check<?=$usuario->NombreUsuario?>" value="<?=$usuario->NombreUsuario?>"/>
                                            <label for="check<?=$usuario->NombreUsuario?>"></label>
                                        <?php
                                            } 
                                            
                                            if($usuario->habilitado == 0) {
                                        ?>
                                            <input type="checkbox" id="check<?=$usuario->NombreUsuario?>" value="<?=$usuario->NombreUsuario?>"/>
                                            <label for="check<?=$usuario->NombreUsuario?>"></label>
                                        <?php    
                                            }
                                        ?>
                                    </td>
                                    <!--
                                    <td>
                                        <a href="/?//=base_url()?>index.php/usuarios/eliminar?idUsuario=</?//= $usuario->IdUsuario ?>" class="btn-floating waves-effect waves-light">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                    -->
                                    
                                    <td>
                                        <a class="btn-floating waves-effect waves-light">
                                            <i class="material-icons">mode_edit</i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                                <?php
                                
                                    } else {
                                        echo '<h3>No hay usuarios registrados</h3>';    
                                    }
                                ?>
                </table>
            </div>
		</div>
	</body>
</html>