<?php
include_once __DIR__.'/controller/deptcontroller.php';
include_once __DIR__.'/controller/empcontroller.php';
session_start();
$deptcontroller=new DeptController();
$results=$deptcontroller->getDepartments();
if(isset($_POST['submit']))
{
    $errors=false;
    if(!empty($_POST['name']))
    {
        $name=$_POST['name'];
    }
    else
    {
        $name_error="Please enter name";
        $errors=true;
    }
    if(!empty($_POST['nrc']))
    {
        $nrc=$_POST['nrc'];
    }
    else
    {
        $nrc_error="Please enter nrc";
        $errors=true;
    }
    if(!empty($_POST['position']))
    {
        $position=$_POST['position'];
    }
    else
    {
        $position_error="Please enter position";
        $errors=true;
    }
    if(!empty($_POST['dept']))
    {
        $department=$_POST['dept'];
        echo $department;
    }
    else
    {
        $dept_error="Please enter dept";
        $errors=true;
    }
    if(!empty($_POST['email']))
    {
        $email=$_POST['email'];
    }
    else
    {
        $email_error="Please enter email";
        $errors=true;
    }
    if(!empty($_POST['phone']))
    {
        $phone=$_POST['phone'];
    }
    else
    {
        $phone_error="Please enter phone";
        $errors=true;
    }
    if(!empty($_POST['address']))
    {
        $address=$_POST['address'];
    }
    else
    {
        $address_error="Please enter address";
        $errors=true;
    }
    if($errors==false)
    {
        $empcontroller=new EmpController();
        $result=$empcontroller->addEmployee($name,$nrc,$position,$department,$email,$phone,$address);
        if($result)
        {
            $_SESSION['message']="Successfully added new employee";
            header('location:emp_index.php');
        }
    }

}
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
                                    <input type="text" name="name" class="form-control" placeholder="Enter emp name" value="<?php if(isset($name)) echo $name; ?>">
                                    <span class="text-danger"><?php if(isset($name_error)) echo $name_error; ?></span>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">NRC</label>
                                    <input type="text" name="nrc" class="form-control" placeholder="Enter NRC No." value="<?php if(isset($nrc)) echo $nrc; ?>">
                                    <span class="text-danger"><?php if(isset($nrc_error)) echo $nrc_error; ?></span>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Position</label>
                                    <input type="text" name="position" class="form-control" placeholder="Enter Position" value="<?php if(isset($position)) echo $position; ?>">
                                    <span class="text-danger"><?php if(isset($position_error)) echo $position_error; ?></span>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Dept Name</label>
                                    <select class="form-control" aria-label="Default select example" name="dept">
                                    <option>Select Department Name</option>
                                    <?php
                                        foreach($results as $dept)
                                        {
                                            
                                            if(isset($department) && $department==$dept['id'])
                                            {
                                                echo "<option value='".$dept['id']."' selected>".$dept['name']."</option>";
                                            }
                                            else
                                            {
                                                echo "<option value='".$dept['id']."'>".$dept['name']."</option>";
                                            }
                                            
                                        }
                                    ?>
                                    </select>
                                    <span class="text-danger"><?php if(isset($dept_error)) echo $dept_error; ?></span>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter email" value="<?php if(isset($email)) echo $email; ?>">
                                    <span class="text-danger"><?php if(isset($email_error)) echo $email_error; ?></span>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone" value="<?php if(isset($phone)) echo $phone; ?>">
                                    <span class="text-danger"><?php if(isset($phone_error)) echo $phone_error; ?></span>
                                </div>
                                <div class="m-2">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php if(isset($address)) echo $address; ?>">
                                    <span class="text-danger"><?php if(isset($address_error)) echo $address_error; ?></span>
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