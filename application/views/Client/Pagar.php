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
                            <div class="col-lg-7 col-md-6 col-12">
                                <form class="form" method="post" action="<?php echo base_url('index.php/Validar') ?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">CARD NUMBER</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                            <input type="text" class="form-control" id="creditcard" name="Tarjeta" data-sider-select-id="037439f3-a7ce-40a9-848e-886afd215dae">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <label class="form-label">EXPIRATION DATE</label>
                                            <div class="input-group">

                                                <input type="text" class="form-control" name="Fecha" placeholder="MM / YY">
                                            </div>
                                        </div>
                                        <div class="col-5 pull-right">
                                            <label class="form-label">CV CODE</label>
                                            <div class="input-group">

                                                <input type="text" class="form-control" name="CVC" placeholder="CVC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label">NAME OF CARD</label>
                                                <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gap-items">


                                        <button type="submit" class="btn btn-success">
                                            <?php echo '<img width ="50px" src="' . base_url("assets/img/pagar/usd-circulo.png") . '"' ?>
                                            <i class="ti-save-alt"></i> Efectuar Pago
                                        </button>




                                    </div>

                                </form>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">

                                <?php
                                ?>
                                <h3 class="text-center">
                                    <?php
                                    $color = '';
                                    $Image = '';
                                    $text  = '';
                                    if ($VPago == 1) {
                                        $color = 'danger';
                                        $Image = base_url("assets/img/pagar/tarjeta-de-credito-denegada.png");
                                        $text  = 'TARJETA DENEGADA';
                                    } else if ($VPago == 2) {
                                        $color = 'success';
                                        $Image = base_url("assets/img/pagar/tarjeta-de-credito.png");
                                        $text  = 'TARJETA APROBADA';
                                    } else {
                                        $color = 'secondary';
                                        $Image = base_url("assets/img/pagar/pago-por-clic.gif");
                                        $text  = 'INGRESE LA TARJETA';
                                    }
                                    echo '<p class="text-' . $color . '">' . $text . '</p>';
                                    echo '<hr>';

                                    echo '<img width="200"  src="' . $Image . '" alt="" class="rounded mx-auto d-block">';

                                    ?>


                                </h3>



                            </div>
                            <?php
                            if ($VPago == 2) {
                                echo '<div class="col-lg-5 col-md-12 col-12">
                                <form class="form" method="post" action="'. base_url('index.php/confirmacion') .'">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="form-label">Comentario</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Comentario" name="Comentario">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="form-label" data-sider-select-id="4f5dbc37-34e4-43ed-a047-bba71e0ccbd4">Selecciones Fecha y Hora</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" type="datetime-local" name="Fecha" data-sider-select-id="8db36a45-7b61-492b-a660-c84db858f8b7">
                                            </div>
                                        </div>
                                        <!-- /.box-body -->

                                        <button type="submit" class="btn btn-primary">
                                            <i class="ti-save-alt"></i> Guardar
                                        </button>

                                </form>
                            </div>';
                            }


                            ?>
                            
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

    <script src="<?php echo base_url("") ?>assets/vendor_components/formatter/jquery.formatter.js"></script>


    <script src="<?php echo base_url("") ?>assets/js/pages/formatter.js"></script>

    <script src="<?php echo base_url("") ?>assets/js/KJ.js"></script>

</body>

<!-- Mirrored from riday-admin-template.multipurposethemes.com/bs5/main-mini/auth_register.html by HTTrack Website Copier/3.x [XR&CO' 2014], Fri, 12 Apr 2024 15:26:29 GMT -->

</html>