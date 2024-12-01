<div class="row">
    <div class="col-xxxl-3 col-lg-7 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Registros de platillos</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Descripcion</th>
                                <th>Categoria</th>
                                <th>Estado</th>
                                <th>Valor</th>
                                <th>Acciones</th>
                            </tr>

                            <?php

                            if ($platillos != 0) {
                                foreach ($platillos as $key) {

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
                                    $Cate = $key["Id_CategoriaPlatillo"];
                                    $categorias = $this->PlatillosModel->DevolverCategoriaPlatillos($Cate);


                                    echo '  <tr>
                                                <td>' . $key["Descripción"] . '</td>
                                                <td>' . $categorias . '</td>
                                                <td><span class="badge badge-pill badge-' . $Color . '">' .  $text . '</span></td>
                                                <td>' . $key["Valor"] . '</td>
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
                                No se ha encontrado ningun platillo Registrado
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
                <h4 class="box-title">Registrar platillos</h4>
            </div>
            <!-- /.box-header -->
            <form class="form" method="post" action="<?php echo base_url('index.php/RegistrarPlatillos') ?>">


                <div class="box-body">
                    <div class="form-group">
                        <label class="form-label">Categorias</label>
                        <div class="input-group mb-3">
                            <select class="form-select" name="Categorias">
                                <option selected="" disabled></option>
                                <?php
                                $categorias = $this->CategoriaPLatillosModel->cargarCategoriaParaPlatillo();
                                foreach ($categorias as $key) {
                                    echo "<option value='" . $key["Id_CategoriaPlatillo"] . "'>" . $key["Descripcion"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Descripción del platillos</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Descripción de la mesa" name="Descripcion">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Valor</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-money"></i></div>
                            <input type="text" class="form-control" name="Valor" placeholder="270" data-sider-insert-id="673c38b6-7a26-4170-9717-46c60c454444" data-sider-select-id="2923bb2e-05bd-4675-96f1-89c9614c1776">
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