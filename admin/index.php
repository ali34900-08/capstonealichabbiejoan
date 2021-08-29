<?php 

include('security.php');
include('includes/header.php');
include('includes/navbar.php');


 ?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Nursing Students</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                                <?php
                                                $query = "SELECT id FROM student ORDER BY id";
                                                $query_run = mysqli_query($link, $query);

                                                $row = mysqli_num_rows($query_run);

                                                echo '<h1>'.$row.'</h1>';



                                                 ?>


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-nurse fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Number of Classes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                   
                                <?php 
                                $query_class = mysqli_query($link,"select * from class")or die(mysqli_error());
                                $count_class = mysqli_num_rows($query_class);

                                echo '<h1>'.$count_class.'</h1>'; 
                                ?>
                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-university fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Number of Instructor</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                   
                                <?php 
                                $query_teacher = mysqli_query($link,"select * from teacher")or die(mysqli_error());
                                $count_teacher = mysqli_num_rows($query_teacher);

                                echo '<h1>'.$count_teacher.'</h1>'; 
                                ?>
                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


                



    <?php 

        include('includes/script.php');
        include('includes/footer.php');

    ?>

