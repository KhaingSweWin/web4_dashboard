<?php
include_once 'masterlayouts/header.php';
include_once 'controller/customer_controller.php';
$cid=$_GET['cid'];
$customercontroller=new CustomerController();
$results=$customercontroller->showCustomer($cid);

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phno=$_POST['ph'];
    $email=$_POST['email'];
    $debt=$_POST['debt'];
    $address=$_POST['adress'];
    $place=$_POST['bplace'];
    if(!empty($name) && !empty($email) && !empty($phno) && !empty($address) && !empty($place)){
     $cuscontroller=new CustomerController();
     $result=$cuscontroller->editCustomer($cid,$name,$email,$phno,$debt,$address,$place);
     if($result)  
     {
         
         header("location:cusindex.php");
     }
    }
    else{
        $error="please fill the blank";
    }
}
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
                        <form method="POST">
                    <div class="container">
                <div class="row">
                <label><h3>ဝယ်သူအချက်အလက်ပြုပြင်ခြင်း</h3></label>             
                </div>
                <?php
                foreach($results as $result)
                {
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>အမည်*</label>
                        <input type="text" class="form-control" value ="<?php echo $result['name'] ?>" name="name" id="name" >  
                        <span style="color:red"><?php if(isset($error)) echo $error; ?></span>
                    </div>
                    

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>ဖုန်းနံပါတ်*</label>
                        <input type="text" class="form-control" name="ph" id="ph" value ="<?php echo $result['phone']; ?>"> 
                        <span style="color:red"></span> 
                    </div>
                    <div class="col-md-6">
                        <label>အီးမေး*</label>
                        <input type="text" class="form-control" name="email" id="email" value ="<?php echo $result['email']; ?>">  
                        <span style="color:red"></span>
                    </div>
                </div>
                <div class="row">
                        <div class="col">
                        <label>အများဆုံးလက်ခံသည့်အကြွး*</label>
                        <input type="text" class="form-control" name="debt" id="debt" value ="<?php echo $result['max_debt']; ?>">  
                        </div>       
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>နေရပ်လိပ်စာ*</label>
                        <textarea class="form-control" rows="3" name="adress" id="adress" > <?php echo $result['address'];?></textarea> 
                        <span style="color:red"><?php if(isset($error)) echo $error; ?></span> 
                    </div>
                    <div class="col-md-6">
                        <label>ပို့ဆောင်ရန်နေရာ*</label>
                        <textarea class="form-control" rows="3" name="bplace" id="bpalce" ><?php echo $result['ship_address'];?></textarea>  
                        <span style="color:red"><?php if(isset($error)) echo $error; ?></span>
                    </div>
                </div>
                <br>
                <div>
                    <a class="btn btn-success" href="cusindex.php">မလုပ်တော့ပါ*</a>
                    <input type="submit"  id="submit" name="submit" value="ပြင်မည်" class="btn btn-primary">
                </div>

            </div>
           <?php
                };
           ?>

       </form>
                        
                    </div>
                </main> 
    <?php include_once 'masterlayouts/footer.php';?>