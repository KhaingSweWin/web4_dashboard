<?php
include_once 'masterlayouts/header.php';
include_once 'controller/customer_controller.php';
$cusContorller=new CustomerController();
$results=$cusContorller->showCustomers();

?>

        <div id="layoutSidenav">
            <?php include_once 'masterlayouts/sidebar.php';?>
            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                      <div class="container">
                        <a class="btn btn-success float-end py-3 px-3" href="exportcustomer.php">ဒေါင်းလုပ်လုပ်ရန်</a>
                        <a class="btn btn-success float-end py-3 px-3" href="addcustomer.php">ဝယ်သူအသစ်ထည့်ရန်</a>
                          
                          
                      <table class="table table-stripped" >
                      <thead>
                        <td> Name </td>
                        <td> Email </td>
                        <td> Phone</td>
                        <td> Max _Debt </td>
                        <td> Address </td>
                        <td> Shipping Address </td>
                        <td> Actions </td>
                      </thead>
                      <tbody id="tablebody">
                      <?php 
                      foreach($results as $result)
                      {
                        $id=$result['id'];                        
                        echo "<tr>";
                        echo "<td>". $result['name']."</td>";
                        echo "<td>". $result['email']."</td>";
                        echo "<td>". $result['phone']."</td>";
                        echo "<td>". $result['max_debt']."</td>";
                        echo "<td>". $result['address']."</td>";
                        echo "<td>". $result['ship_address']."</td>";
                        echo "<td cid=". $id ."><a href='view_customer.php?cid=". $id ."' class='btn btn-success'><i class='fa fa-eye'></i></a><a href='edit_customer.php?cid=". $id ."'  class='btn btn-warning'><i class='fa fa-edit'></i></a> <button class='btn btn-danger delete' ><i class='fa fa-trash'></i></button></td>";
                        echo "</tr>";
                      }
                      ?>
                      </tbody>
                      </table> 
                       
                    </div>
                </main> 
    <?php include_once 'masterlayouts/footer.php';?>