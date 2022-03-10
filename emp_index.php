<?php
include_once __DIR__.'/controller/empcontroller.php';
$empcontroller=new EmpController();
$results=$empcontroller->getEmployees();
?>
<?php include_once "masterlayouts/header.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Employee Information</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add New Employee</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-stripped">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>NRC</th>
                                    <th>Position</th>
                                    <th>Dept</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                                <?php
                                $count=1;
                                foreach($results as $result)
                                {
                                    echo "<tr>";
                                    echo "<td>" .$count++ ."</td>";
                                    echo "<td>" .$result['name'] ."</td>";
                                    echo "<td>" .$result['nrc'] ."</td>";
                                    echo "<td>" .$result['position'] ."</td>";
                                    echo "<td>" .$result['dept_id'] ."</td>";
                                    echo "<td>" .$result['email'] ."</td>";
                                    echo "<td>" .$result['address'] ."</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include_once "masterlayouts/footer.php"; ?>