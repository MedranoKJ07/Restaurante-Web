<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="https://riday-admin-template.multipurposethemes.com/bs5/images/favicon.ico">-->

    <title>Reservando Mesa</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="<?php echo base_url("") ?>assets/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="<?php echo base_url("") ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url("") ?>assets/css/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(<?php echo base_url("") ?>assets/images/auth-bg/bg-2.jpg)">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box box-body b-1 text-center no-shadow">
                                    <?php
                                    if ($mesa[0]["Capacidad"] == 1) {
                                        $mesa4 = base_url("assets/img/landingMesa/Mesa1.png");
                                    } else if ($mesa[0]["Capacidad"] == 2) {
                                        $mesa4 = base_url("assets/img/landingMesa/Mesa2.png");
                                    } else if ($mesa[0]["Capacidad"] == 4) {
                                        $mesa4 = base_url("assets/img/landingMesa/Mesa4.png");
                                    } else if ($mesa[0]["Capacidad"] == 6) {
                                        $mesa4 = base_url("assets/img/landingMesa/Mesa6.png");
                                    }
                                    echo '<img src="' . $mesa4 . '" id="product-image" class="img-fluid" alt="">';
                                    ?>
                                </div>


                                <div class="clear"></div>
                            </div>
                            <div class="col-md-8 col-sm-6">
                                <h1 class="box-title mt-0" data-sider-select-id="b6bb582b-b249-43e0-869f-d6be96db9449">HA HECHO UNA RESERVACION</h1>

                                <?php
                                $Id = $this->session->userdata('id');
                                $Cliente = $this->ReservationModel->DevolverIdCliente($Id);
                                $data = $this->ReservationModel->DevolverFechaReservada($Cliente);
                                    echo '<h4 class="pro-price mb-0 mt-20">La cual esta agendada para el </h4>'.$data;
                                ?>
                                

                                <hr>
                                <table class="table">
                                    <?php

                                    $categoria = $this->CategoriaMesasModel->DevolverDescripcionCategoriaMesa($mesa[0]["Id_Categorias_mesa"]);
                                    $nombre = $this->session->userdata('Nombre');
                                    $Apellido = $this->session->userdata('Apellido');
                                    $Correo = $this->session->userdata('Correo');

                                    echo '<tbody>
                                        <tr>
											<td> Mesa Reservada</td>
											<td> ' . $mesa[0]["Descripcion"] . ' </td>
										</tr>
                                        <tr>
											<td> Categoria</td>
											<td> ' . $categoria . ' </td>
										</tr>
                                        <tr>
											<td> Valor Agregado </td>
											<td> $ ' . $mesa[0]["Valor_Agregado"] . ' </td>
										</tr>

										<tr>
											<td> Nombres</td>
											<td> ' . $nombre . ' </td>
										</tr>
										<tr>
											<td> Apellidos</td>
											<td> ' . $Apellido . ' </td>
										</tr>
										<tr>
											<td> Correo Electrónico</td>
											<td> ' . $Correo . ' </td>
										</tr>
                                        
									</tbody>';


                                    ?>

                                </table>


                                <div class="gap-items">

                                    <?php
                                    echo '<a href="' . base_url("index.php/landingPage") . '" class="btn btn-danger">Volver</a>';
                                    ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Vendor JS -->
    <script src="<?php echo base_url("") ?>assets/js/vendors.min.js"></script>
    <script src="<?php echo base_url("") ?>assets/js/pages/chat-popup.js"></script>
    <script src="<?php echo base_url("") ?>assets/vendor_components/apexcharts-bundle/dist/apexcharts.min.js"></script>
    <script src="<?php echo base_url("") ?>assets/icons/feather-icons/feather.min.js"></script>

</body>

<!-- Mirrored from riday-admin-template.multipurposethemes.com/bs5/main-mini/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 15:26:29 GMT -->

</html>