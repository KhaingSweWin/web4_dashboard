<?php
include_once __DIR__.'/controller/empcontroller.php';
include_once __DIR__.'/controller/deptcontroller.php';
session_start();
$empcontroller=new EmpController();
$results=$empcontroller->getEmployees();
$deptcontroller=new DeptController();
$dept_results=$deptcontroller->getDepartments();
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
                        <div class="col-md-3">
                            <select name="dept" class="form-control " id="dept1">
                                <option value="">Select Department</option>
                                <?php
                                foreach($dept_results as $dept)
                                {
                                    echo "<option value='".$dept['id']."'>" . $dept['name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="emp" class="form-control" id="emp1">
                                <option>Select Employee</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        
                        <?php
                            if(isset($_SESSION['message'])) 
                            {
                               echo "<div class='col-md-12 alert alert-primary'>";
                               echo  $_SESSION['message'];
                               echo "</div>";
                               
                            }
                            unset($_SESSION['message']);
                               
                            ?>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                    <th>Name</th>
                                    <th>NRC</th>
                                    <th>Position</th>
                                    <th>Dept</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                    <th>Name</th>
                                    <th>NRC</th>
                                    <th>Position</th>
                                    <th>Dept</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="tbody">
                                    <?php
                                $count=1;
                                foreach($results as $result)
                                {
                                    echo "<tr>";
                                    echo "<td>" .$count++ ."</td>";
                                    echo "<td>" .$result['name'] ."</td>";
                                    echo "<td>" .$result['nrc'] ."</td>";
                                    echo "<td>" .$result['position'] ."</td>";
                                    echo "<td>" .$result['dept_name'] ."</td>";
                                    echo "<td>" .$result['email'] ."</td>";
                                    echo "<td>" .$result['address'] ."</td>";
                                    echo "<td id=".$result['id']."><a class='btn btn-primary' href='emp_view.php?id=" . $result['id'] . "'>View </a><a class='btn btn-warning m-2 edit' href='emp_edit.php?id=".$result['id']."'>Edit</a><a class='btn btn-danger m-2 delete'>Delete</a>";
                                    echo "</tr>";
                                }
                                ?>
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include_once "masterlayouts/footer.php"; ?>