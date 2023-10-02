<?php include('session.php');?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Admin - Users</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminhome.php">        
            <div class="sidebar-brand-text mx-3">Admin Home</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">

                        <span> <a class="nav-link collapsed" href="posts.php">Posts</a> </span>
                        <span>  <a class="nav-link collapsed" href="broadcast.php">Broadcast</a> </span>
            </li>

            <hr class="sidebar-divider">
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    ERHMS - Users


                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                        </li>



                        <li class="nav-item dropdown no-arrow mx-1">

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">


                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Users</h1>
                </div>



                    <?php
                    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                    {
                      echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
                      unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                    {
                      echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
                      unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card-body">


                    <div class="table-responsive">

                      <?php
                      $connection = mysqli_connect("localhost","root","","socialdb");

                      $query = "SELECT * FROM members";
                      $query_run = mysqli_query($connection,$query);
                       ?>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>Hometown</th>
                                    <th>Region</th>
                                    <th>email</th>
                                    <th>Contact no</th>
                                    <th>Gender</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Image</th>
                                    <th>Birthdate</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Work</th>
                                    <th>Religion</th>
                                    <th>Capacity</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              if(mysqli_num_rows($query_run) > 0)
                              {
                                while ($row = mysqli_fetch_assoc($query_run))
                                 {?>
                              <tr>
                                <td><?php echo $row['member_id']; ?></td>
                                <td><?php echo $row['firstname'];?></td>
                                <td><?php echo $row['lastname'];?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['hometown']; ?></td>
                                <td><?Php echo $row['region']?></td>
                                <td><?Php echo $row['email']?></td>
                                <td><?Php echo $row['contact_no']; ?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['username']?></td>
                                <td><?php echo $row['password'];?></td>
                                <td><?php echo $row['image'];?></td>
                                <td><?php echo $row['birthdate'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['status'];?></td>
                                <td><?php echo $row['work'];?></td>
                                <td><?php echo $row['religion'];?></td>
                                <td><?php echo $row['capacity'];?></td>
                                <td>
                                  <form action="deluser.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['member_id'] ?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                  </form>
                                </td>
                              </tr>
                            <?php
                              }
                            }
                            else {
                              echo "No record found";
                            }?>
                            </tbody>



                    <div class="row">

                        <div class="col-lg-6">


                        </div>

                    </div>

                </div>
              </div>

            </div>
        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="adminlogout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
