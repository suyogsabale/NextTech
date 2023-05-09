<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <title>Next Tech Machines</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Kaushan%20Script.css">
    <link rel="stylesheet" href="assets/css/Montserrat.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Ludens-basic-login.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <script src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><img src="assets/img/Group%201%20(1).png" width="143" height="42"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link " href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">PRODUCT</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
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
                        
                        // echo'<div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="'.$row['modal'].'" data-bs-toggle="modal">';
                        echo'<div data-aos="fade-up" data-aos-duration="900" class="card aos-init aos-animate" style="width: 18rem;border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;box-shadow: 5px 5px 16px 2px rgba(0,0,0,0.25);margin: 14px;min-width: 280px;max-width: 300px;margin-bottom: 20px;">';
                        echo'<div>';
                        echo'<img width="239" height="192" src="assets/img/products/'.$row['img'].'" style="padding: 8px;margin: 7px;transform-origin: center;width: 239px;height: 192px;" />';
                        echo'<div class="card-body d-flex flex-column" style="height: 262px;">';
                        echo'<div>';
                        echo'<h4 style="font-family: &quot;Source Sans Pro&quot;, sans-serif;font-weight: 700;color: rgb(249 87 35);">'.$row['name'].'</h4>';
                        echo'<p style="font-family: &quot;Source Sans Pro&quot;, sans-serif;color: #212121;margin-top: 16px;">'.$row['short'].'</p>';
                        echo'<a class="align-self-end card-link" data-bss-hover-animate="pulse" href="'.$row['modal'].'" data-bs-toggle="modal" style="padding: 4px;background: #0e8dcb;color: rgb(255,255,255);border-radius: 17px;padding-right: 14px;padding-left: 14px;padding-bottom: 6px;font-family: &quot;Source Sans Pro&quot;, sans-serif;margin-top: auto;">View More</a>';
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                        // echo'</div>';
                    }





                ?>

            </div>
        </div>

    </section>

    <footer>
    <footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
            <h3><img src="assets/img/Group%201%20(1).png" width="200" height="60"></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Product</a><strong> · · </strong><a href="#">About</a><strong> · </strong><a href="#">Contact</a><strong> · </strong><a href="#">Login</a></p>
                <p class="company-name">Company Name © 2015 </p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span"><span style="color: rgb(202, 208, 219); background-color: rgb(36, 42, 54);">Flat No. C-14</span><br><span style="color: rgb(202, 208, 219); background-color: rgb(36, 42, 54);">Sara Riddhi, Harsul,</span></span> Aurangabad</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-start"><span style="font-weight: normal !important; color: rgb(202, 208, 219); background-color: rgb(36, 42, 54);">+91 9823573380</span></p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank"><br><span style="font-weight: normal !important; color: rgb(202, 208, 219); background-color: rgb(36, 42, 54);">info@nexttechmachine.com</span><br><br></a></p>
                </div>
            </div>
            <div class="col-md-4 footer-about">
                <h3>About Us</h3>
                <p><br><span style="color: rgb(202, 208, 219); background-color: rgb(36, 42, 54);">We specialize in providing industrial machines for businesses of all sizes. With years of experience in the industry, we have established ourselves as a trusted provider of quality equipment that helps businesses to optimize their production processes and reduce costs.</span><br><br></p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>


    <!-- ----------------------- modals---------------------------- -->

    <?php

                    include("connection.php");
                    $query = "SELECT * FROM prod_tab";
                    $result = mysqli_query($con,$query);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo'<div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="'.$row['modid'].'" dat="'.$row['id'].'"  datn="'.$row['name'].'">';
                        echo'<div class="modal-dialog modal-lg" role="document">';
                        echo'<div class="modal-content">';
                        echo'<div class="container">';
                        echo'<div class="row">';
                        echo'<div class="col-lg-8 mx-auto">';
                        echo'<div class="modal-body">';
                        echo'<h2 class="text-uppercase" style="font-size: 50px;"><span style="color: var(--ast-global-color-2); background-color: rgba(247, 248, 248, 0);">'.$row['name'].'</span></h2>';
                        echo'<p class="text-muted item-intro" style="font-size: 23px;"><a href="http://nexttechmachines.com/product-category/turning-machine/"><span style="color: rgb(0, 0, 0); background-color: rgb(247, 248, 248);">'.$row['class'].'</span></a></p><img class="img-fluid d-block mx-auto" src="assets/img/products/'.$row['img'].'">';
                        echo'<p style="font-size: 18px;text-align: justify;padding-right: 0px;transform: scale(1);backdrop-filter: blur(0px);-webkit-backdrop-filter: blur(0px);margin: -9px;"><strong><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">Key Features</span></strong><br><br><br><span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0);">'.$row['feat'].'</span></p>';
                        // echo'<ul class="list-unstyled"></ul><a class="btn btn-primary" role="button" href="'.$row['pdf'].'" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><a  href = "addq2.php?i='.$row['id'].'&n='.$row['name'].'" class="btn btn-success" role="button" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></a><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>';
                        echo'<ul class="list-unstyled"></ul><a class="btn btn-primary" role="button" href="'.$row['pdf'].'" style="margin: 0px;margin-right: 14px;background: rgb(54,74,254);"><i class="fa fa-download"></i><span>&nbsp;Download Catalog</span></a><button class="btn btn-primary" type="button" id="tgbt" data-bs-toggle="modal" data-bs-target="#formModal" data-bs-dismiss="modal" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></button><button class="btn btn-primary" type="button" data-bs-dismiss="modal" style="margin-left: 18px;color: rgb(232,232,232);background: rgb(227,39,39);"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>';
                        // <a  href = 'addquery.php?i=$row[id]&n=$row[name]' class='btn btn-success' role="button" style="background: #38c83e;color: rgb(255,255,255);border: 3px none rgb(0,0,0);"><i class="icon ion-ios-paper-outline"></i><span>&nbsp;Get Quotation</span></a>
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                        echo'</div>';
                    }
    ?>

                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Please Fill the Requirement details...</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="quotForm" name="quotForm" >
                        <!-- <form id="quotForm" name="quotForm"  action="addquery.php" method="POST" enctype="multipart/form-data">    -->
                        <div class="form-group">
                                <div class="form-group mb-3"><label for="qname">Name :</label><input class="form-control" type="text" id="qname" name="qname" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 lead"></small></div>
                                <div class="form-group mb-3"><label for="qemail">Email :</label><input class="form-control" type="email" id="qemail" name="qemail" placeholder="Your Email *" required=""><small class="form-text text-danger lead"></small></div>
                                <div class="form-group mb-3"><label for="qtel">Mob no :</label><input class="form-control" type="tel" id="qtel" name="qtel" placeholder="Your Phone *" required=""><small class="form-text text-danger lead"></small></div>
                                <div class="form-group mb-3"><label for="prodid">Product ID :</label><input type="text" class="form-control" id="prodid" name="prodid" readonly></div>
                                <div class="form-group mb-3"><label for="prodnm">Product Name :</label><input type="text" class="form-control" id="prodnm" name="prodnm" readonly></div>
                                <div class="form-group mb-3"><label for="loc">Location :</label><input class="form-control" type="text" id="loc" name="loc" placeholder="Your Location (CITY) *" required=""><small class="form-text text-danger flex-grow-1 lead"></small></div>
                                <div class="form-group mb-3"><label for="qty">Quantity :</label><input class="form-control" type="text" id="qty" name="qty" placeholder="Required Quantity *" required=""><small class="form-text text-danger flex-grow-1 lead"></small></div>

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" name="submit" class="btn btn-primary" id="quotbtn" style="background-color: #fe5721 ;" >Get Quotation</button>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit"class="btn btn-primary" id="quotbtn" style="background-color: #fe5721 ;">Get Quotation</button> -->
                        <!-- data-bs-dismiss="modal"  -->
                    </div>
                    </div>
                </div>
                </div>


                <script>

                            // $(document).ready(function() {
                            //     $('tgbt').on('click', function() {
                            //         var data = $('#portfolioModal4 .portfolio-caption h4').text();
                            //         $('#exampleFormControlInput1').val(data);
                            //     });
                            // });


                            // Get all the buttons inside modals with class "portfolio-modal"
                            const modalButtons = document.querySelectorAll('.portfolio-modal button');

                            // Add a click event listener to each modal button
                            modalButtons.forEach(button => {
                                button.addEventListener('click', function() {
                                    // Get the ID of the parent modal
                                    const pId = this.closest('.portfolio-modal').getAttribute('dat');
                                    prodid.value=pId;

                                    const pn = this.closest('.portfolio-modal').getAttribute('datn');
                                    prodnm.value=pn;
                                });
                            });
                            
                            
                            </script>




<script type="text/javascript">
    // Load the EmailJS library
        window.onload = function () {
         emailjs.init("suyogsabale111@gmail.com");
         console.log("fun init");
        //  document.getElementById("quotbtn").onclick = getquot;
        //  console.log("getquot");
        };
        

    

        

        
document.getElementById('quotbtn').addEventListener('click', (event)=> {
    // console.log("fifif");   
    event.preventDefault();
    console.log("fun2 called quot form");
// document.getElementById('quotbtn').addEventListener('onClick', function(event) {
    // Get the user's inputs
    const name2 = document.getElementById('qname').value;
    const email2 = document.getElementById('qemail').value;
    const tel2=document.getElementById('qtel').value;
    const prodid = document.getElementById('prodid').value;
    const prodnm = document.getElementById('prodnm').value;
    const loc = document.getElementById('loc').value;
    const qty = document.getElementById('qty').value;
    
    const templateParams2 = {
    name2: name2,
    email2: email2,
    tel2: tel2,
    prodid:prodid,
    prodnm:prodnm,
    loc:loc,
    qty:qty
    };  
    console.log("Data: "+ JSON.stringify(templateParams2));



emailjs.send('service_een9ply', 'template_fkhebjs', templateParams2,'medk5Cz9L94vXLnMW')
.then((response)=>{
console.log('SUCCESS!', response.status, response.text);
alert('Your message has been sent successfully!');
document.getElementById('quotForm').reset();
}, (error)=> {
console.log('FAILED...',error);
alert('Oops! Something went wrong. Please try again later.');
});
});
        

        // var adminmail = "php var session mail.
        // Handle form submission
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            // document.getElementById('sendMessageButton').addEventListener('onClick', function(event) {
                event.preventDefault();
                console.log("fifif contacct form");
                // emailjs.init("suyogsabale111@gmail.com");
        // Get the user's inputs
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        const telp=document.getElementById('telp').value;
        
        const templateParams = {
        name: name,
        email: email,
        telp: telp,
        // adminmail:adminmail,
        message: message
        };
          
    
    
    
    emailjs.send('service_een9ply', 'template_o6d2w01', templateParams,'medk5Cz9L94vXLnMW')
    .then(function(response) {
        console.log('SUCCESS!', response.status, response.text);
        alert('Your message has been sent successfully!');
        document.getElementById('contactForm').reset();
    }, function(error) {
        console.log('FAILED...', error);
        alert('Oops! Something went wrong. Please try again later.');
    });
});

        
        
        
</script>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>