<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <title>SB Admin 2 - Tables</title> -->
    <?php //echo $title;?>

    <!-- Custom fonts for this template -->
    <link href="<?php echo site_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="<?php echo site_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo site_url('assets/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
            echo $this->include('includes/sidebar');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
        <?php 
            echo $this->include('includes/topbar');
        ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    

                <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Product</h5>

                            <?php echo validation_list_errors();?>

                            <!-- No Labels Form -->
                            <form class="row g-3" action="<?php echo site_url('products/update/'. $product_id );?>" method="post">
                            <!-- <input type="hidden" name="_method" value="PUT"> -->
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" name="product" value="<?php echo $product ;?>" placeholder="Product Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select id="inputState" class="form-select" name="category">
                                        <option>Category</option>
                                        <option <?php echo ($category=="Smartphone")? "selected":""?>>Smartphone</option>
                                        <option <?php echo ($category=="Tablet")? "selected":""?>>Tablet</option>
                                        <option <?php echo ($category=="Laptop")? "selected":""?>>Laptop</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" name="model" value="<?php echo $model ;?>" placeholder="Model">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" name="price" value="<?php echo $price ;?>" placeholder="Price">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" name="sku" value="<?php echo $sku ;?>" placeholder="SKU">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End No Labels Form -->

                        </div>
                    </div>




                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php 
            echo $this->include('includes/footer');
        ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo site_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo site_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo site_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo site_url('assets/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo site_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo site_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo site_url('assets/js/demo/datatables-demo.js');?>"></script>

</body>

</html>