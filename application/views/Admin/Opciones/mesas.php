		<div class="row">
			<div class="col-xxxl-3 col-lg-8 col-12">
				<div class="box">
					<div class="box-header with-border">
						<h4 class="box-title">Registros de las mesas</h4>
					</div>
					<div class="box-body">
						<table class="table table-hover">
							<tbody>
								<tr>
									<th>Numero de la mesa</th>
									<th>Descripcion</th>
									<th>Categorias</th>
									<th>Estado</th>
									<th>Capacidad de personas</th>
									<th>Valor Agregado</th>
									<th>Acciones</th>
								</tr>
								<?php
								if ($mesas != 0) {
									foreach ($mesas as $key) {

										$estado  = $key["Estado"];
										$text = "";
										$Color = "danger"; // color rojo
										if ($estado == 1) {
											$text .= "Disponible";
											$Color = "primary";
										} else if ($estado == 2) {
											$text .= "Reservada";
											$Color = "success";
										} else {
											$text .= "No Activa";
											$Color = "warning";
										}
										$Cate = $key["Id_Categorias_mesa"];
										$categorias = $this->CategoriaMesasModel->DevolverCategoria($Cate);


										echo '  <tr>
												<td>' . $key["Numero"] . '</td>
												<td>' . $key["Descripcion"] . '</td>
												<td>' . $categorias . '</td>
												<td><span class="badge badge-pill badge-' . $Color . '">' .  $text . '</span></td>											
												<td>' . $key["Capacidad"] . '</td>
												<td>' . $key["Valor_Agregado"] . '</td>
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
                                    No se ha encontrado ninguna Mesa Registrada
                                    </tr>';
								}

								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-xxxl-3 col-lg-4 col-12">
				<div class="box">
					<div class="box-header with-border">
						<h4 class="box-title">Registrar mesas</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" method="post" action="<?php echo base_url('index.php/RegistrarMesas') ?>">
						<div class="box-body">
							<div class="form-group">
								<label class="form-label">Descripción de la mesa</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Descripción de la mesa" name="Descripcion">

								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Categorias</label>
								<div class="input-group mb-3">
									<select class="form-select" name="Categorias">
										<option selected="" disabled></option>
										<?php
										$categorias = $this->CategoriaMesasModel->cargarCategoriaParaMesa();
										foreach ($categorias as $key) {
											echo "<option value='" . $key["Id_Categoria"] . "'>" . $key["Descripción"] . "</option>";
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
										<option value="1">Disponible</option>
										
										
									</select>

								</div>

							</div>
							<div class="form-group">
								<label class="form-label">Numero de la mesa</label>
								<div class="input-group mb-3">
									<?php 
									$min= $this->MesasModel->CargarUltimoNumeroMesa();
									echo '<input type="number" class="form-control" placeholder="#" min="'.$min.'" max="100" data-sider-select-id="4af5005c-c27b-4d9a-9354-1eaad644fbf0" name="numeroMesa">
									';
									?>
								</div>
							</div>

							<div class="form-group">
								<label class="form-label">Capacidad de personas</label>
								<div class="input-group mb-3">

									<select class="form-select" name="Capacidad_Personas">
										<option selected="" disabled></option>
										<option value="1">1 Persona</option>
										<option value="2">2 Personas</option>
										<option value="4">4 Personas</option>
										<option value="6">6 Personas</option>

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