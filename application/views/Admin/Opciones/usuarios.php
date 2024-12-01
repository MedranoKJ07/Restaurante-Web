<div class="row">

    <div class="col-xxxl-3 col-lg-12 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Crear Usuario</h4>
            </div>
            <!-- /.box-header -->

            <form class="form" method="post" action="<?php echo base_url('index.php/CrearUsuario') ?>">

                <div class="box-body">
                    <div class="form-group">
                        <label class="form-label">Nombre de Usuario</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="UserName" name="Usuarios">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nombres</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Names" name="Nombres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Apellidos</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="LastNames" name="Apellidos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contraseña</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Password" name="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" name="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Roles</label>
                        <div class="input-group mb-3">
                            <select class="form-select" name="Roles">
                                <option selected="" disabled></option>
                                <?php
                                $categorias = $this->UsuarioModel->cargarRolesParaUsuario();
                                foreach ($categorias as $key) {
                                    echo "<option value='" . $key["Id_Roles"] . "'>" . $key["Descripcion"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <label class="form-label">Estado</label>
                        <div class="input-group mb-3">
                            <select class="form-select" name="Estado">
                                <option selected="" disabled></option>
                                <option value="0">Inactivo</option>
                                <option value="1">Activo</option>

                            </select>

                        </div>





                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-end">
                        <button type="button" class="btn btn-warning me-1">
                            <i class="ti-trash"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ti-save-alt"></i> Guardar
                        </button>
                    </div>
            </form>
        </div>
        <div class="col-xxxl-3 col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Registros de los Usuarios</h4>
                </div>
                <div class="box-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Rol</th>
                                <th>Usuario</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            <?php
                            if ($usuarios != 0) {
                                foreach ($usuarios as $key) {

                                    $estado  = $key["Estado"];
                                    $text = "";
                                    $Color = "danger"; // color rojo
                                    if ($estado == 1) {
                                        $text .= "Activo";
                                        $Color = "primary";
                                    } else {
                                        $text .= "No Activo";
                                        $Color = "warning";
                                    }
                                    $Cate = $key["Id_Roles"];
                                    $rol = $this->UsuarioModel->DevolverRol($Cate);
                                    echo '  <tr>
                                                <td>' . $rol . '</td>
                                                <td>' . $key["Usuario"] . '</td>
                                               
                                                <td>' . $key["Nombres"] . '</td>
                                                <td>' . $key["Apellidos"] . '</td>
                                                <td>' . $key["Correo"] . '</td>     
                                                <td><span class="badge badge-pill badge-' . $Color . '">' .  $text . '</span></td>											
                                                <td><a href="#" class="text-info me-10" data-bs-toggle="tooltip" data-bs-original-title="Edit">
														<i class="ti-marker-alt"></i>
													</a>
													<a href="#" class="text-danger" data-bs-original-title="Delete" data-bs-toggle="tooltip">
														<i class="ti-trash"></i>
													</a>
												</td>
                                            </tr>';
                                }
                            } else {
                                echo '<tr>
                                No se ha encontrado ningun Usuario Creado
                                </tr>';
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div>