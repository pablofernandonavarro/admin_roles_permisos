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
                            <table class="table tablr-bordered table-striped dt-responsive tabalaperfil" width="100%">

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
            <form method="post" enctype="multipart/form-data ">

                <div class="from-group has-feedback" bis_skin_checked="1">
                <label for="nombre_perfil" class="col-form-label mt-2">Nombre Perfil</label>
                    <input type="text" name="nombre_perfil" id="" class="form-control" placeholder="Nombre">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="from-group has-feedback" bis_skin_checked="1">
                <label for="nombre_perfil" class="col-form-label mt-4">Usuario</label>
                    <input type="text" name="nombre_usuario" id="" class="form-control" placeholder="Usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="from-group has-feedback" bis_skin_checked="1">
                <label for="nombre_perfil" class="col-form-label mt-2">Contraseña</label>
                    <input type="text" name="password_" id="" class="form-control" placeholder="pasword">
                    <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
                </div>


                <div class="from-group has-feedback" bis_skin_checked="1">

                    <div class="btn btn-default btn-file" bis_skin_checked="1">
                        <i class="fas fa-paperclip"></i>Adjuntar imagen de perfil
                        <input type="file" name="subirImagenPerfil">
                    </div>
                    <img class="previsualizarImagenPerfil img-fluid py-2" width='200' height='200'>
                    <p class="help-block small">Dimensiones : 480px * 382 ! Peso Max 2 mb ! Formato: jpg o png</p>


                </div>


                <div class="form-group has-feedback">
                    <label for="">Rol</label>
                    <select name="cat_user" id="" class="form-control" requiered>

                    <?php
                    foreach($roles as $ct){
?>
                        <option value="<?php echo $ct['id_roles'] ?>"><?php echo $ct['nombre_rol'] ?></option>
                <?php    
                }
                    ?>
                       
                    </select>
              

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                


            </form>
        </div>
    </div>

</div>