
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-gradient-customize {
            background: rgb(58,60,180);
            background: linear-gradient(45deg, rgba(58,60,180,1) 0%, rgba(93,69,252,1) 51%, rgba(61,251,255,1) 100%);
        }

        .glass-card-customize {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="bg-gradient-customize">

    <div class="container">

        <!-- Outer Row -->
        <div class="row d-flex justify-content-center align-items-center">

            <div class="col-xl-5 col-lg-6 col-md-7">

                <div class="glass-card-customize card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- <h1 class="h4 text-gray-900 mb-4">APLIKASI PENGGAJIAN <br> <b>PT INDONESIA BANGKIT</b></h1> -->
                                        <h1 class="h4 text-white mb-4">APLIKASI PENGGAJIAN <br> <b>PT INDONESIA BANGKIT</b></h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan')?>
                                    <form class="user" method="POST" action="<?php echo base_url('welcome')?>">
                                        <div class="form-group">
                                            <label class="text-white" for="username">Username</label>
                                            <input name="username" type="text" class="form-control"id="exampleInputUser" aria-describedby="emailHelp" placeholder="Enter username...">
                                            <?php echo form_error('username', '<div class="text-small text-warning"><?div>')?>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-white" for="password">Password</label>
                                            <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Enter password...">
                                            <?php echo form_error('password', '<div class="text-small text-warning"><?div>')?>
                                        </div>
                                        
                                        <hr>
                                        <!-- <button type="submit" class="btn btn-primary btn-user btn-block"> -->
                                        <button type="submit" class="btn bg-warning text-white btn-block">
                                            Login
                                        </button>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <!-- <hr> -->
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>