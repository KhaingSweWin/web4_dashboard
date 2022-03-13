<?php
include_once __DIR__.'/controller/deptcontroller.php';
include_once __DIR__.'/controller/empcontroller.php';
$id=$_GET['id'];
$empcontroller=new EmpController();
$result=$empcontroller->getEmployee($id);

?>
<?php include_once "masterlayouts/header.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Employee Information</h1>
                        <a href="emp_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add New Employee</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="m-2">
                                    <label class="form-label">Name</label>
                                    <label class="form-label"><?php echo $result[0]['name'];?></label>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">NRC</label>
                                    
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Position</label>
                                    
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Dept Name</label>
                                    
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Email</label>
                                    
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Phone</label>
                                    
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Address</label>
                                    
                                </div>
                                <div class="m-2 d-flex justify-content-end">
                                    <a class="btn btn-primary">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include_once "masterlayouts/footer.php"; ?>