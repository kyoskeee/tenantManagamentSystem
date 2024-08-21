<?php require_once ("../Home-assets/header.php") ?>
<?php require_once ("../Home-assets/sidebar.php") ?>
<?php require_once ("../Home-assets/H-navbar.php")?>
<!-- This Line is For Contents -> --> <?php require_once ("../listContents/list-main.php")?>
<main class="p-3">
    <!-- 1 -->
    <div class="title  text-white">
        <h1>DASHBOARD</h1>
    </div>
                <div class="card text-center mt-3">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                

                <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped  bg-warning " role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
            </div>
    <!-- / -->

    <!-- cards -->


        <div class="cards-container mt-5  ">
        <div class="row d-flex justify-content-around ">
                
            <div class="card cards text-white bg-primary mb-3 col-lg-3 col-md-4  col-sm-1 ">
            <a href="../cards/analytics1.php">
            <div class="card-header text-white">Analytics 1</div>
                <div class="card-body">
                    <h5 class="card-title text-white">?</h5>
                    <p class="card-text text-white">Analytical Tool that can...</p>
                </div>
            </a>
                </div>


                <div class="card cards text-white bg-secondary mb-3 col-lg-3 col-md-4  col-sm-1">
                <a href="../cards/analytics2.php">
                <div class="card-header text-white">Analytics 2</div>
                <div class="card-body">
                    <h5 class="card-title text-white">!</h5>
                    <p class="card-text text-white">Analytical Tool that can...</p>
                </div>
                </a>
                </div>

               
                <div class="card cards text-white bg-success mb-3 col-lg-3 col-md-4  col-sm-1">
                <a href="../cards/payments.php">
                <div class="card-header text-white">Tenants Payments</div>
                <div class="card-body">
                    <h5 class="card-title text-white">Pending: 3</h5>
                    <p class="card-text text-white">Success: 10</p>
                </div>
                </a>
                </div>


                <div class="card cards text-white bg-danger mb-3 col-lg-3 col-md-4  col-sm-1">
                <a href="../cards/utilities.php">
                <div class="card-header text-white">Utilities Monitoring</div>
                <div class="card-body">
                    <h5 class="card-title text-white">Pending: 4</h5>
                    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </a>
                </div>


                <div class="card cards text-dark bg-warning mb-3 col-lg-3 col-md-4  col-sm-1">
                <a href="../cards/duedates.php">
                <div class="card-header text-white">Tenants Due Dates</div>
                <div class="card-body">
                    <h5 class="card-title text-white">Billing</h5>
                    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </a>
                </div>


                <div class="card cards text-dark bg-info mb-3 col-lg-3  col-md-4 col-sm-1">
                <a href="../cards/tenants.php">
                <div class="card-header text-white">Tenants Monitoring</div>
                <div class="card-body">
                    <h5 class="card-title text-white">In: 10</h5>
                    <p class="card-text text-white">Out: 20</p>
                </div>
                </a>
                </div>


                <div class="card cards text-dark bg-light mb-3 col-lg-3 col-md-4 col-sm-1">
                <a href="../cards/create.php">
                <div class="card-header text-dark">Concerns</div>
                <div class="card-body">
                    <h5 class="card-title text-dark">Create / Read </h5>
                    <p class="card-text text-dark">You can Write Announcements or Read Tenant's Concern Here.</p>
                </div>
                </a>
                </div>


                <div class="card cards text-white bg-dark mb-3 col-lg-3 col-md-4 col-sm-1">
                <a href="#">
                <div class="card-header text-white">Extra Card</div>
                <div class="card-body">
                    <h5 class="card-title text-white">Dark card title</h5>
                    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </a>
                </div>

                
                </div>
                </div>
    <!-- /cards -->
            </main>
        </div>
<?php require_once ("../Home-assets/H-footer.php")?>

