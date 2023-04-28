<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Kaushan%20Script.css">
    <link rel="stylesheet" href="assets/css/Montserrat.css">
    <link rel="stylesheet" href="assets/css/Source%20Sans%20Pro.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Ludens-basic-login.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><img src="assets/img/Group%201%20(1).png" width="143" height="42"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">PRODUCT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/pxfuel88.jpg');">
        <div class="container">
            <div class="intro-text">
                <div data-aos="fade-up" data-aos-duration="700" data-aos-once="true" id="blur" class="intro-heading text-uppercase" style="margin-bottom: 0;padding-top: 40px;padding-bottom: 40;">
                    <div class="intro-lead-in"><span><strong><span style="color: rgb(254, 87, 33); background-color: rgba(255, 255, 255, 0);">Machines for Generation!</span></strong></span></div><span style="padding-right: 0px;margin: 0px;margin-right: 1px;padding-left: 0px;padding-bottom: 0px;margin-bottom: 3px;margin-left: 0px;margin-top: 0px;"><strong><span style="background-color: rgba(255, 255, 255, 0);">Industrial Machines Supplier</span></strong></span>
                    <div class="intro-lead-in"><span style="font-size: 27px;"><span style="color: rgb(253, 86, 32); background-color: rgba(255, 255, 255, 0);">One Stop Place for CNC, VMC, TMC, HMC and other Machines…</span></span></div>
                </div><a class="btn btn-primary btn-xl text-uppercase" role="button" href="#services"><span style="color: rgb(0, 0, 0);">GET IN TOUCH</span></a>
            </div>
        </div>
    </header>
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">PRODUCTS</h2>
                    <h3 class="text-muted section-subheading">We Cater Your Needs...</h3>
                </div>
            </div>
            <div class="row">
                

                <?php

                    include("connection.php");
                    $query = "SELECT * FROM prod_tab";
                    $result = mysqli_query($con,$query);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        echo'<div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="'.$row['modal'].'" data-bs-toggle="modal">';
                        echo'<div class="card" style="width: 18rem;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;box-shadow: 5px 5px 16px 2px rgba(0,0,0,0.25);margin: 14px;min-width: 280px;max-width: 300px;margin-bottom: 20px;">';
                        echo'<div>';
                        echo'<img width="239" height="192" src="assets/img/products/'.$row['img'].'" style="padding: 8px;margin: 7px;transform-origin: center;width: 239px;height: 192px;" />';
                        echo'<div class="card-body d-flex flex-column" style="height: 262px;">';
                        echo'<div>';
                        echo'<h4 style="font-family: &quot;Source Sans Pro&quot;, sans-serif;font-weight: 700;color: rgb(249 87 35);">'.$row['name'].'</h4>';
                        echo'<p style="font-family: &quot;Source Sans Pro&quot;, sans-serif;color: #212121;margin-top: 16px;">'.$row['short'].'</p>';
                        echo'<a class="align-self-end card-link" data-bss-hover-animate="pulse" href="'.$row['modal'].'" data-bs-toggle="modal" style="padding: 4px;background: #0e8dcb;color: rgb(255,255,255);border-radius: 17px;padding-right: 14px;padding-left: 14px;padding-bottom: 6px;font-family: &quot;Source Sans Pro&quot;, sans-serif;margin-top: auto;">Learn More</a>';
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                    }





                ?>





            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">why choose us</h2>
                    <h3 class="text-muted section-subheading"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-users fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">20+ Years Experienced Team</h4>
                    <p class="text-muted">We are privileged to have sales team which having 20+ years experience experts understand your business's production processes and provide you best solution</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary" style="color: rgb(62,140,228);"></i><i class="fa fa-rupee fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Reasonable Price</h4>
                    <p class="text-muted">We take the time to understand your business's production processes, ensuring that we recommend the right machines to help you increase efficiency and reduce costs.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-package fa-stack-1x fa-inverse" style="height: 73px;width: 81px;margin: 26px;padding: 0px;">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                            <line x1="12" y1="12" x2="20" y2="7.5"></line>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <line x1="12" y1="12" x2="4" y2="7.5"></line>
                            <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                        </svg></span>
                    <h4 class="section-heading">Fast feature Delivery</h4>
                    <p class="text-muted">Under promise and Over Delivery is our success Mantra We Care your Production Growth and Deliver your machines on time by provide excellent after-sales service and maintenance support.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">MILESTONE</h2>
                    <h3 class="text-muted section-subheading"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/20230428090358_[fpdl.in]_building-concept-illustration_114360-4469.jpg" style="width: 146px;height: 147px;margin: 4px;padding: 2px;"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="font-size: 16px;">FEB 2020 Company Established</h4>
                                    <h4 class="subheading" style="font-size: 19px;">Started Journey in Machining Solutions</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Focuses on establishing relationships with manufacturers. attend trade shows and industry events to network and build relationships.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/20230428090655_[fpdl.in]_green-hand-drawn-partnership-clipart_53876-115985.jpg" style="width: 146px;height: 147px;margin: 4px;padding: 2px;"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="font-size: 16px;">May 2021 Launch of a new product line</h4>
                                    <h4 class="subheading" style="font-size: 18px;">Associated with KTM Techno Solutions</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Started a high energy exercise to provide a better customer experience and expanded our product line to meet customer demand.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/Frame%201.png" style="width: 146px;height: 147px;margin: 4px;padding: 2px;"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="font-size: 16px;">FEB 2022 New geographic market</h4>
                                    <h4 class="subheading" style="font-size: 18px;">Started Scaling</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Adopted High Efficiency CRM Tool for customer better service management and expanded working area from Local to Maharashtra</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/Group%203.png" style="width: 146px;height: 147px;margin: 4px;padding: 2px;"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="font-size: 16px;">JAN 2023 Today</h4>
                                    <h4 class="subheading" style="font-size: 18px;">Running</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Started acquiring customer trust and counted among one of the leading machine dealer for Manufacturing Solutions</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/1.jpg">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/2.jpg">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/3.jpg">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/creative-market.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/designmodo.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/envato.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/themeforest.jpg"></a></div>
            </div>
        </div>
    </section>
    <section id="contact" style="background-image: url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 lead"></small></div>
                                <div class="form-group mb-3"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger lead"></small></div>
                                <div class="form-group mb-3"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger lead"></small></div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2023</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase" style="font-size: 50px;"><span style="color: var(--ast-global-color-2); background-color: rgba(247, 248, 248, 0);">CYNIC 370</span></h2>
                                <p class="text-muted item-intro" style="font-size: 23px;"><a href="http://nexttechmachines.com/product-category/turning-machine/"><span style="color: rgb(0, 0, 0); background-color: rgb(247, 248, 248);">TURNING MACHINE</span></a></p><img class="img-fluid d-block mx-auto" src="assets/img/products/CYNIC.png">
                                <p style="font-size: 18px;text-align: justify;padding-right: 0px;transform: scale(1);backdrop-filter: blur(0px);-webkit-backdrop-filter: blur(0px);margin: -9px;"><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">Key Features</span></strong><br><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; &nbsp; Dual Torque Tube Design with 45° True Slant Bed&nbsp;Construction</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; 32X10 Size Ball Screw with C3 Grade, Double Nut, Long Nut,and Deep Groove with Zero Backlash</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· High Precision Grade 30 Size Ball Type LM Guidays with&nbsp;Medium Preloaded Flange Type Blocks</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; Digital Servo Spindle Motor</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; &nbsp;Cartridge Type High-Speed Rigid Spindle with P4 Class&nbsp;Angular Contact Ball Bearings (3+2)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; Hydraulic Power Chuck 165×3 Jaw with Hard Jaw and Soft Jaw</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; Linear type Tooling system</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; &nbsp; All Telescopic Covers in Stainless Steel Grade (Corrosion&nbsp;Free)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; Machine Guard With RAL 7037 &amp; RAL 7021 Powder Coated</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·&nbsp; &nbsp; Electric Panel with Air Conditioner</span><br><br></p>
                                <ul class="list-unstyled"></ul><a class="btn btn-primary" role="button" href="http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></button><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase"><span style="font-weight: normal !important; color: var(--ast-global-color-2); background-color: rgba(247, 248, 248, 0);">TMC SERIES</span></h2>
                                <p class="text-muted item-intro">TMC Machine</p><img class="img-fluid d-block mx-auto" src="assets/img/products/tmc.png">
                                <p class="text-start"><br><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">Key Features</span></strong><br><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Dual Torque Tube Design with 45° True Slant Bed&nbsp;Construction</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· 32X10 Size Ball Screw with C3 Grade, Double Nut, Long Nut,and Deep Groove with Zero Backlash</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· High Precision Grade 35 Size Ball Type LM Guidays with&nbsp;Medium Preloaded Flange Type Blocks</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Digital Servo Spindle Motor</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Cartridge Type High-Speed Rigid Spindle with P4 Class&nbsp;Angular Contact Ball Bearings (3+2)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Hydraulic Power Chuck 200×3 Jaw with Hard Jaw and Soft Jaw</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·Live Tool Turrent VDI 30</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·All Telescopic Covers in Stainless Steel Grade (Corrosion&nbsp;Free)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Machine Guard With RAL 7037 &amp; RAL 7021 Powder Coated</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Electric Panel with Air Conditioner</span><br><br><br></p>
                                <ul class="list-unstyled"></ul><a class="btn btn-primary" role="button" href="http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></button><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">hmc series</h2>
                                <p class="text-muted item-intro">HMC Machines</p><img class="img-fluid d-block mx-auto" src="assets/img/products/hmc.png">
                                <p class="text-start"><br><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">Key Features</span></strong><br><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Bed Construction Extra Wide and Torque Tube Design.</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Lowe Centre Of Gravity</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· High Precision Grade Roller LM Guide ways with medium preloaded extra long blocks</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Digital Servo Spindle Motor</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Taiwan Make High Speed Rigid Spindle with P4 Class Angular Contact Ball Bearings</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Smart Tool Management System(STM)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·ATC with lowest tool time to Bath Table</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·Advance tool call system(ATS)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Auto Lubricant Unit and Coolarnt Unit</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Flush Coolant</span><br><br><br></p><a class="btn btn-primary" role="button" href="http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></button><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">CLOBBER series</h2>
                                <p class="text-muted item-intro">VMC Machine</p><img class="img-fluid d-block mx-auto" src="assets/img/products/CLOBBER.png">
                                <p class="text-start"><br><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">Key Features</span></strong><br><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Dual Torque Tube Design&nbsp; Construction</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· 32X10 Size Ball Screw with C3 Grade, Double Nut, Long Nut,and Deep Groove with Zero Backlash</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· High Precision Grade 35 Size Ball Type LM Guidays with&nbsp;Medium Preloaded Flange Type Blocks</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Digital Servo Spindle Motor</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Cartridge Type High-Speed Rigid Spindle with P4 Class&nbsp;Angular Contact Ball Bearings (3+2)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· 20 Tools ATC with lowest tool to tool time</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·Machine Gaurd with RAL 7037 &amp; RAL 7021 Powder Coated</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·All Telescopic Covers in Stainless Steel Grade (Corrosion&nbsp;Free)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Machine Guard With RAL 7037 &amp; RAL 7021 Powder Coated</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Electric Panel with Air Conditioner</span><br><br><br></p><a class="btn btn-primary" role="button" href="http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></button><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">vlt serires</h2>
                                <p class="text-muted item-intro">VLT Machines</p><img class="img-fluid d-block mx-auto" src="assets/img/products/vtl.png">
                                <p class="text-start"><br><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">Key Features</span></strong><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Dual Casting Wall Construction in column design</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· High Precision Class roller LM guide ways with Medium</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Ball Screw with C3 class, Double Nut, Long Nut and deep Groove with zerobacklash</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Digital Servo Spindle Motor</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Cartridge Type High-Speed Rigid Spindle with P4 Class&nbsp;Angular Contact Ball Bearings&nbsp;</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Hydraulic BI-Directional Turrent</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·Hydraulic Power Chunk with Hard Jaw with Soft Jaw</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·All Telescopic Covers in Stainless Steel Grade (Corrosion&nbsp;Free)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Machine Guard With RAL 7037 &amp; RAL 7021 Powder Coated</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Electric Panel with Air Conditioner</span><br><br><br></p><a class="btn btn-primary" role="button" href="http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></button><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">DCMC SERIES&nbsp;</h2>
                                <p class="text-muted item-intro">DCMC Machines</p><img class="img-fluid d-block mx-auto" src="assets/img/products/DCMC.png">
                                <ul class="list-unstyled"></ul>
                            </div>
                            <p class="text-start"><br><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">Key Features</span></strong><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Dual Casting Wall Construction in column design</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· High Precision Class roller LM guide ways with Medium</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Ball Screw with C3 class, Double Nut, Long Nut and deep Groove with zerobacklash</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Digital Servo Spindle Motor</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Cartridge Type High-Speed Rigid Spindle with P4 Class&nbsp;Angular Contact Ball Bearings&nbsp;</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Hydraulic BI-Directional Turrent</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·Hydraulic Power Chunk with Hard Jaw with Soft Jaw</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">·All Telescopic Covers in Stainless Steel Grade (Corrosion&nbsp;Free)</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Machine Guard With RAL 7037 &amp; RAL 7021 Powder Coated</span><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">· Electric Panel with Air Conditioner</span><br><br><br></p><a class="btn btn-primary" role="button" href="http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></button><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>