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
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Animated-Text-Background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Ludens-basic-login.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Tamplate-SB-Admin-on-BSS.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><img src="assets/img/Group%201%20(1).png" width="143" height="42"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="#about">manage product</a></li>
                    <li class="nav-item"><a class="nav-link" href="queries.html">Queries</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-out.php">LOG-OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/pxfuel88.jpg');">
        <div class="container"></div>
    </header>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <h3 class="text-dark mb-4">Manage Your Products</h3>
                </div>
                <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;"><a class="btn btn-primary" href="insert.html" role="button"><i class="fa fa-plus"></i>&nbsp;ADD PRODUCT</a></div>
            </div>
            <div class="card" id="TableSorterCard">
                <div class="card-header py-3">
                    <div class="row table-topper align-items-center">
                        <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                            <p class="text-primary m-0 fw-bold"></p>
                        </div>
                        <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;"><button class="btn btn-warning btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-plus"></i></button><button class="btn btn-warning btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-minus"></i></button></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table tablesorter" id="ipi-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">PRODUCT Img</th>
                                        <th class="text-center">NAME</th>
                                        <th class="text-center">PRODUCT DESCRIPTION</th>
                                        <th class="text-center">CATEGORY</th>
                                        <th class="text-center">FEATURES</th>
                                        <th class="text-center">BROCHURE</th>
                                        <th class="text-center">MODAL</th>
                                        <th class="text-center">MODAL_ID</th>
                                        <th class="text-center filter-false sorter-false">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    
                                    
                                <?php

                                    include("connection.php");
                                    $query = "SELECT * FROM prod_tab";
                                    $result = mysqli_query($con,$query);

                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        
                                        echo"<tr>";
                                        echo"<td>".$row["id"]."</td>";
                                        echo"<td><img src='assets/img/products/".$row["img"]."' width='100' height='80'></td>";
                                        echo"<td>".$row["name"]."</td>";
                                        echo"<td>".$row["short"]."</td>";
                                        echo"<td>".$row["class"]."</td>";
                                        echo"<td>".$row["feat"]."</td>";
                                        echo"<td>".$row["pdf"]."</td>";
                                        echo"<td>".$row["modal"]."</td>";
                                        echo"<td>".$row["modid"]."</td>";
                                        echo"<td class='text-center align-middle' style='max-height: 60px;height: 60px;'><a href = 'update.php?i=$row[id]&n=$row[name]&sh=$row[short]&ft=$row[feat]&cs=$row[class]&pd= $row[pdf]&md=$row[modal]&mdi=$row[modid]' class='btn btn-success'>Edit</a><a class='btn btnMaterial btn-flat accent btnNoBorders checkboxHover' role='button' style='margin-left: 5px;' data-bs-toggle='modal' data-bs-target='#delete-modal' href='#'><i class='fas fa-trash btnNoBorders' style='color: #DC3545;'></i></a><a href = 'delete.php?i=$row[id] 'class='btn btn-danger' data-toggle='modal' data-target='#deleteModal' onclick='modalLauch(".$row['id'].")'>Delete</a></td>";
                                        echo"<tr>";
                                    }
                                ?>

                                    
                            <div class='modal fade' id='deleteModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered' role='document'>
                                   <div class='modal-content'>
                                       <div class='modal-header'>
                                           <h5 class='modal-title' id='exampleModalLongTitle'>Delete</h5>
                                           <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                               <span aria-hidden='true'>&times;</span>
                                           </button>
                                       </div>
                                        <div class='modal-body'>
                                            Are you sure you want to delete this complain?
                                            <input id="toDeleteId" type="hidden" value="">
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-light' data-dismiss='modal'>Close</button>
                                            <button type='button' class='btn btn-danger' onclick="confirmDelete()">Delete</button>
                                        </div>
                                  </div>
                              </div>
                            </div>

                                </tbody>
                            </table>
                        </div>
                    </div>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Animated-Text-Background-animatedTextBackground.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="assets/js/Table-With-Search-search-table.js"></script>
    <script>
                                    var delId;
                                    function modalLauch(id){
                                        delId=id;
                                        $('#toDeleteId').val(id);
                                    }
                                    function confirmDelete(){
                                        window.location.replace("http://localhost/NextTech/delete.php?i="+delId);
                                    }
    </script>
</body>

</html>