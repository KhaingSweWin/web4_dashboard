<?php
include_once 'masterlayouts/header.php';
include_once 'controller/product_controller.php';

$product_controller=new ProductController();
$results=$product_controller->getProducts();
if(isset($_POST['submit'])){
    
}
?>

        <div id="layoutSidenav">
            <?php include_once 'masterlayouts/sidebar.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">စတော့များ</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">စတော့များ</li>
                        </ol>
                        <div class="card-body" >
                    <form class="form-signin" method="post" >
                    <div class="row">
                        <div class="col-md-6">
                            <label for="productName">Product's Name</label>
                            <div class="input-group-lg mb-3">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose Product</option>
                                    <?php
                                        foreach($results as $result)
                                        {
                                            echo "<option value='". $result['id'] . "'>" . $result['name']. "</option>";
                                        }
                                    ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="orderDate">Date</label><br>
                            <input type="date" name="orderDate" id="orderDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pCurrentPrice">Current Price</label><br>
                            <input type="number" name="pCurrentPrice" id="pCurrentPrice">
                        </div>
                        <div class="col-md-4">
                            <label for="pCurrentParkin">Current Price(Parkin)</label><br>
                            <input type="number" name="pCurrentParkin" id="pCurrentParkin" placeholder="0">
                        </div>
                        <div class="col-md-4">
                            <label for="pCurrentlb">Current Price(lb)</label><br>
                            <input type="number" name="pCurrentlb" id="pCurrentlb" placeholder="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="pLeastPrice">Least Price</label><br>
                            <input type="number" name="pLeastPrice" id="pLeastPrice">
                        </div>
                        <div class="col-md-4">
                            <label for="pLeastParkin">Least Price(Parkin)</label><br>
                            <input type="number" name="pLeastParkin" id="pLeastParkin" placeholder="0">
                        </div>
                        <div class="col-md-4">
                            <label for="pLeastlb">Least Price(lb)</label><br>
                            <input type="number" name="pLeastlb" id="pLeastlb" placeholder="0">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                            <label for="pStockPrice">Stock Price</label><br>
                            <input type="number" name="pStockPrice" id="pStockPrice">
                        </div>
                        <div class="col-md-4">
                            <label for="pStockParkin">Stock Price(Parkin)</label><br>
                            <input type="number" name="pStockParkin" id="pStockParkin" placeholder="0">
                        </div>
                        <div class="col-md-4">
                            <label for="pStocklb">Stock Price(lb)</label><br>
                            <input type="number" name="pStocklb" id="pStocklb" placeholder="0">
                        </div>
                    </div>

                    <button class="btn btn-md btn-primary btn-block" type="submit" name="submit" style="margin-top: 10px" >Submit</button>
                    <button class="btn btn-md  btn-primary btn-block" type="submit" name="cancel" style="margin-top: 10px" >Cancel</button>
                    </form>
                    </div>
                        
                    </div>
                </main> 
    <?php include_once 'masterlayouts/footer.php';?>