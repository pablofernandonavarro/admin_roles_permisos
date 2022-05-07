<div class="content-wrapper" style="min-height: 717px;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Admninistar usuarios</h1>
                </div>

            </div>

        </div>

    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-out-line">
                        <div class="card-header">
                            <button type="button" class="btn btn-success crear-usuario" data-toggle="modal" data-target="#modal-crear-usuario">
                                crear nuevo Usuario

                            </button></br>
                        </div></br>
                        <div class="card-body">
                            <table class="table tablr-bordered table-striped dt-responsive tablaUsuarios" width="100%">

                                <thead>
                                    <tr>
                                        <th style="width:10px">#</th>
                                        <th>Nombre</th>
                                        <th>Usuarios</th>
                                        <th>Foto</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($usuarios as $key => $usuario) {

                                        $item = "id_roles";
                                        $valor = $usuario['rol'];

                                        $roles = ctrRoles::ctrMostarRoles($item, $valor);



                                    ?>

                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $usuario['nombre'] ?></td>
                                            <td><?= $usuario['usuario'] ?></td>
                                            <td>

                                                <img src="<?= HTTP . $usuario['foto'] ?>" alt="" height="40px" width="40px" class="img-circle" alt="User Image">

                                            </td>
                                            <td><?= $roles['nombre'] ?></td>
                                            <td>
                                                <div class="btn-group">

                                                    <button class="btn btn-warning btn-sm btnEditarUsuarios" data-toggle="modal" data-target="#modal-editar-usuario" idusuario="<?= $usuario['id'] ?>">
                                                        <i class="fas fa-pencil-alt text-white">Editar</i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-pencil-alt text-white">Eliminar</i>
                                                    </button>
                                                </div>


                                            </td>

                                        </tr>






                                    <?php
                                    }
                                    ?>


                                </tbody>



                            </table>
                        </div>
                        <div class="card-footer">

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>



</div>

<!--==========================================================================================
                           MODAL PARA CREAR USUARIOS
==============================================================================================-->

<div class="modal modal-default fade p-4" id="modal-crear-usuario">
    <div class="modal-dialog">
        <div class="modal-content col-md-10">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible">Agregar Nuevo Usuario</h4>
            </div>
            <form method="post" enctype="multipart/form-data">

                <div class="from-group has-feedback" bis_skin_checked="1">
                    <label for="usuario_perfil" class="col-form-label mt-2">Nombre Perfil</label>
                    <input type="text" name="usuario_perfil" id="" class="form-control" placeholder="Nombre">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="from-group has-feedback" bis_skin_checked="1">
                    <label for="usuario_usuario" class="col-form-label mt-4">Usuario</label>
                    <input type="text" name="usuario_usuario" id="" class="form-control" placeholder="Usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="from-group has-feedback" bis_skin_checked="1">
                    <label for="usuario_password" class="col-form-label mt-2">Contraseña</label>
                    <input type="text" name="usuario_password" id="" class="form-control" placeholder="pasword">
                    <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
                </div>


                <div class="from-group has-feedback" bis_skin_checked="1">

                    <div class="btn btn-default btn-file" bis_skin_checked="1">
                        <i class="fa-solid fa-imagen"></i>Adjuntar imagen de usuario
                        <input type="file" name="subirImagenPerfil">
                    </div>
                    <img class="preVisualizarImgUsuarios img-fluid py-2" width='200' height='200'>
                    <p class="help-block small">Dimensiones : 480px * 382 ! Peso Max 2 mb ! Formato: jpg o png</p>


                </div>


                <div class="form-group has-feedback">
                    <label for="usuario_rol">Rol</label>
                    <select name="usuario_rol" id="" class="form-control" requiered>



                        <option value="1">admin</option>
                        <option value="2">operador</option>

                    </select>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <?php
                $guardarUsuarios = new ctrUsuarios();
                $guardarUsuarios->ctrGuardarUsuario();

                ?>

            </form>
        </div>
    </div>
</div>
<!--==========================================================================================
                           MODAL PARA Editar Usuarios
==============================================================================================-->

<div class="modal modal-default fade p-4" id="modal-editar-usuario">
    <div class="modal-dialog">
        <div class="modal-content col-md-10">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible">Editar Nuevo Usuario</h4>
            </div>
            <form method="post" enctype="multipart/form-data">

                <div class="from-group has-feedback" bis_skin_checked="1">
                    <label for="usuario_perfil_editar" class="col-form-label mt-2">Nombre Perfil</label>
                    <input type="text" name="usuario_perfil_editar" id="usuario_perfil_editar" class="form-control" placeholder="Nombre">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="from-group has-feedback" bis_skin_checked="1">
                    <label for="usuario_usuario_editar" class="col-form-label mt-4">Usuario</label>
                    <input type="text" name="usuario_usuario_editar" id="usuario_usuario_editar" class="form-control" placeholder="Usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="from-group has-feedback" bis_skin_checked="1">
                    <label for="usuario_password_editar" class="col-form-label mt-2">Contraseña</label>
                    <input type="text" name="usuario_password_editar" id="usuario_password_editar" class="form-control" placeholder="pasword">
                    <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
                </div>


                <div class="from-group has-feedback" bis_skin_checked="1">

                    <div class="btn btn-default btn-file" bis_skin_checked="1">
                        <i class="fa-solid fa-imagen"></i>Adjuntar imagen de usuario
                        <input type="file" name="subirImagenPerfil_editar" id="subirImagenPerfil_editar">
                    </div>
                    <img class="preVisualizarImgUsuarios img-fluid py-2" width='200' height='200'>
                    <p class="help-block small">Dimensiones : 480px * 382 ! Peso Max 2 mb ! Formato: jpg o png</p>


                </div>


                <div class="form-group has-feedback">
                    <label for="usuario_rol">Rol</label>
                    <select name="usuario_rol_editar" id="usuario_rol_editar" class="form-control" requiered>



                        <option value="1">admin</option>
                        <option value="2">operador</option>

                    </select>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <?php
                 $guardarUsuarios = new ctrUsuarios();
                 $guardarUsuarios->ctrEditarUsuario();

                ?>

            </form>
        </div>
    </div>

</div>