<?php
include_once __DIR__.'/controller/deptcontroller.php';
$deptcontroller=new DeptController();
$results=$deptcontroller->getDepartments();
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
                            <form >
                                <div class="m-2">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter emp name">
                                </div>
                                <div class="m-2">
                                    <label class="form-label">NRC</label>
                                    <input type="text" name="nrc" class="form-control" placeholder="Enter NRC No.">
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Position</label>
                                    <input type="text" name="position" class="form-control" placeholder="Enter Position">
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Dept Name</label>
                                    <select class="form-control" aria-label="Default select example">
                                    <option selected>Select Department Name</option>
                                    <?php
                                        foreach($results as $dept)
                                        {
                                            echo "<option value='".$dept[id]."'>".$dept['name']."</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                                </div>
                                <div class="m-2 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary ">Submit
                                </div>
                            </form>
                        </div>
                    </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include_once "masterlayouts/footer.php"; ?>