<?php
include_once 'masterlayouts/header.php';
include_once 'controller/customer_controller.php';
$cid=$_GET['cid'];
$customercontroller=new CustomerController();
$results=$customercontroller->showCustomer($cid);
?>
<div id="layoutSidenav">
            <?php include_once 'masterlayouts/sidebar.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">ဝယ်သူများ</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">ဝယ်သူများ</li>
                        </ol>
                        
                    <div class="container">
                <div class="row">
                <label><h3>အသေးစိတ်အချက်အလက်</h3></label>             
                </div>
               <?php 
               foreach($results as $result)
               {
                ?>   
               
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">အမည်</label>
                        
                        
                    </div>
                    <div class="col-md-3">
                    <label class="form-label"><?php echo $result['name'];?></label>
                    </div>
                    

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">ဖုန်းနံပါတ်</label>
                        
                    </div>
                    <div class="col-md-3">
                       
                        <label class="form-label"><?php echo $result['phone'];?></label>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">အီးမေး</label>
                        
                    </div>
                    <div class="col-md-3">
                    <label class="form-label"><?php echo $result['email'];?></label>
                    </div>
                </div>
                <div class="row">
                        <div class="col-3">
                        <label class="form-label">အများဆုံးလက်ခံသည့်အကြွး</label>
                        
                        </div> 
                        <div class="col-3">
                        <label class="form-label"><?php echo $result['max_debt'];?></label> 
                        </div>      
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">နေရပ်လိပ်စာ</label>
                        
                    </div>
                    <div class="col-md-3">
                    <label class="form-label"><?php echo $result['address'];?></label> 
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">ပို့ဆောင်ရန်နေရာ</label>
                        
                    </div>
                    <div class="col-md-3">
                    <label class="form-label"><?php echo $result['ship_address'];?></label>
                    </div>
                </div>
                <?php
               }
                ?>
                <br>
                <div>
                    <a class="btn btn-success" href="cusindex.php">နောက်သို့</a>
                    
                </div>

            </div>
           
       
                        
                    </div>
                </main> 
    <?php include_once 'masterlayouts/footer.php';?>
