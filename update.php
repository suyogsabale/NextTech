                <?php
                
                    include('connection.php');
                
                    $id=$_GET['i'];
                    $name =$_GET['n'];
                    $short =$_GET['sh'];
                    $feat =$_GET['ft'];
                    $class =$_GET['cs'];
                    $pdf =$_GET['pd'];
                    $modal =$_GET['md'];
                    $modid =$_GET['mdi'];
                
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Arbutus%20Slab.css">
    <link rel="stylesheet" href="assets/css/Kaushan%20Script.css">
    <link rel="stylesheet" href="assets/css/Montserrat.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Animated-Text-Background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Ludens-basic-login.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Tamplate-SB-Admin-on-BSS.css">
    <link rel="stylesheet" href="assets/css/Transparent-Overlay-On-Image-On-Hover.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><img src="assets/img/Group%201%20(1).png" width="143" height="42"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="manage_pro.php">MANAGE PRODUCTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="queries.html">QUERIES</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-out.php">LOG-OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="services" style="height: 1920;">
        <div class="d-flex d-xl-flex align-items-center align-items-xl-center" style="width: 100%;height: 100%;margin-top: -50rem;">
            <div class="container" style="height: auto;max-height: 112px;">
                <div class="row justify-content-center" style="height: auto;">
                    <div class="col-md-9 col-lg-12 col-xl-10 col-xxl-11" style="height: auto;">
                        <div class="card o-hidden border-0 my-5" data-bss-disabled-mobile="true" data-aos="zoom-in" data-aos-duration="700" data-aos-once="true" style="width: 1257px;height: 836px;max-height: 138%;box-shadow: 0px 0px 9px 3px rgb(253,126,20);">
                            <div class="card-body p-0" style="height: auto;width: 1154px;">
                                <div class="row" style="height: auto;">
                                    <div class="col-lg-6 col-xxl-4 d-none d-lg-flex" style="height: 961px;">
                                        <div class="d-flex flex-column flex-grow-1 justify-content-xxl-center align-items-xxl-center bg-login-image" style="background: var(--bs-card-bg);color: var(--bs-card-cap-bg);height: auto;margin-bottom: 50%;"><img src="assets/img/insertform.jpg" width="369" height="237"></div>
                                    </div>
                                    <div class="col-lg-6 col-xxl-8 offset-xxl-0">
                                       
                                        <form class="bootstrap-form-with-validation" method="post" action="update2.php" enctype="multipart/form-data">
                                            <h2 class="text-center" style="margin-top: 27px;margin-bottom: 28px;">Update Product</h2>
                                            <div class="form-group mb-3"><label class="form-label" for="text-input">Name Of Product :</label><input class="form-control" type="text" id="name" name="name" required value="<?php echo "$name"?>"></div>
                                            <div class="form-group mb-3"><label class="form-label" for="text-input">Product ID :</label><input class="form-control" type="text" id="id" name="id" value="<?php echo "$id"?>" readonly></div>
                                            <div class="form-group mb-3"><label class="form-label" for="text-input">Product Category :</label><input class="form-control" type="text" id="class" name="class" required value="<?php echo "$class"?>"></div>
                                            <div class="form-group mb-3"><label class="form-label" for="text-input">Short Info :</label><input class="form-control" type="text" id="short" name="short" required value="<?php echo "$short"?>"></div>
                                            <div class="form-group mb-3"><label class="form-label" for="text-input">Brochure Link :</label><input class="form-control" type="text" id="pdf" name="pdf" required value="<?php echo "$pdf"?>"></div>
                                            <div class="form-group mb-3"><label class="form-label" for="textarea-input">Product Features :</label><input class="form-control" id="feat" name="feat" required value="<?php echo "$feat"?>"></input></div>
                                            <!-- <div class="form-group mb-3"><label class="form-label" for="textarea-input">Product Features :</label><textarea class="form-control" id="feat" name="feat" required value=""></textarea></div> -->
                                            <!-- <div class="form-group mb-3"><label class="form-label" for="file-input">Product Image :</label><input class="form-control" type="file" id="img" name="img"  accept="image/*"></div> -->
                                            <div class="form-group mb-3"><button class="btn btn-primary" type="submit" name="update" style="margin-left: 50%;background: var(--bs-orange);">UPDATE</button></div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Animated-Text-Background-animatedTextBackground.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="assets/js/Multi-step-form-script.js"></script>
    <script src="assets/js/Table-With-Search-search-table.js"></script>
</body>

</html>