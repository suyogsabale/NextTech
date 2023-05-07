<?php
                
                include('connection.php');
            
                $id=$_GET['i'];
                $name =$_GET['n'];
         
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
                    <li class="nav-item"><a class="nav-link active" href="#">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">PRODUCT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="services" style="height: 1920;">
        <div class="d-flex d-xl-flex align-items-center align-items-xl-center" style="width: 100%;height: 100%;margin-top:-50rem;">
            <div class="container" style="height: auto;">
                <div class="row justify-content-center" style="height: auto;">
                    <div class="col-md-9 col-lg-12 col-xl-10 col-xxl-11" style="height: auto;">
                        <div class="card o-hidden border-0 my-5" data-bss-disabled-mobile="true" data-aos="zoom-in" data-aos-duration="700" data-aos-once="true" style="width: 1257px;height: 836px;max-height: 138%;box-shadow: 0px 0px 9px 3px rgb(253,126,20);">
                            <div class="card-body p-0" style="height: auto;width: 1154px;">
                                <div class="row" style="height: auto;">
                                    <div class="col-lg-6 col-xxl-4 d-none d-lg-flex" style="height: 961px;">
                                        <div class="d-flex flex-column flex-grow-1 justify-content-xxl-center align-items-xxl-center bg-login-image" style="background: var(--bs-card-bg);color: var(--bs-card-cap-bg);height: auto;margin-bottom: 50%;"><img src="assets/img/insertform.jpg" width="369" height="237"></div>
                                    </div>
                                    <div class="col-lg-6 col-xxl-8 offset-xxl-0">
                                       
                                        <form class="bootstrap-form-with-validation" method="post" action="addquery.php" enctype="multipart/form-data">
                                            <div class="form-group">
                                                    <div class="form-group mb-3"><label for="qname">Name :</label><input class="form-control" type="text" id="qname" placeholder="Your Name *" required=""></input></div>
                                                    <div class="form-group mb-3"><label for="qemail">Email :</label><input class="form-control" type="email" id="qemail" placeholder="Your Email *" required=""></input></div>
                                                    <div class="form-group mb-3"><label for="qtel">Mob no :</label><input class="form-control" type="tel" id="qtel" placeholder="Your Phone *" required=""></input></div>
                                                    <div class="form-group mb-3"><label for="prodid">Product ID :</label><input type="text" class="form-control" id="prodid" value="<?php echo "$id"?>" readonly></input></div>
                                                    <div class="form-group mb-3"><label for="prodnm">Product Name :</label><input type="text" class="form-control" id="prodnm" value="<?php echo "$name"?>" readonly></input></div>
                                                    <div class="form-group mb-3"><label for="loc">Location :</label><input class="form-control" type="text" id="loc" placeholder="Your Location (CITY) *" required=""></input></div>
                                                    <div class="form-group mb-3"><label for="qty">Quantity :</label><input class="form-control" type="text" id="qty" placeholder="Required Quantity *" required=""></input></div>

                                                    <div class="form-group mb-3"><button class="btn btn-primary" type="submit" name="submit" style="margin-left: 50%;background: var(--bs-orange);">Get Quotation</button></div>
                                            </div>


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