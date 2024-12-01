<div class="row">
    <div class="col-xxxl-3 col-lg-7 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Registros de categorías de las platillos</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Descripcion</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            <?php
                            if ($categorias != 0) {
                                foreach ($categorias as $key) {

                                    $estado  = $key["Estado"];
                                    $text = "";
                                    $Color = "danger"; // color rojo
                                    if ($estado == 1) {
                                        $text .= "Activa";
                                        $Color = "primary";
                                    } else {
                                        $text .= "No Activa";
                                        $Color = "warning";
                                    }
                                    echo '  <tr>
                                                <td>' . $key["Descripcion"] . '</td>
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
                                    No se ha encontrado ninguna Categoria de Platillos Registrada
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-xxxl-3 col-lg-5 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Registrar categoria de los platillos</h4>
            </div>
            <!-- /.box-header -->
            <form class="form" method="post" action="<?php echo base_url('index.php/Registrarcategoria_platillos') ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label class="form-label">Descripción</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Descripción" name="Descripcion">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Estado</label>
                        <div class="input-group mb-3">
                            <select class="form-select" name="Estado">
                                <option selected="" disabled></option>
                                <option value="0">Inactivo</option>
                                <option value="1">Activo</option>

                            </select>
                        </div>
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
    </div>