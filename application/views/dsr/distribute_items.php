<!DOCTYPE html>
<html>
<head>
   <!--  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="<?php echo base_url('/assets/css/dsr_style2.css');?>"  rel="stylesheet" />
</head>
<body>
<body>
<?php

if ($this->session->flashdata('msg')) {
    echo '
        <div class="container">
            <div class="alert alert-danger">
                ' . $this->session->flashdata("msg") . '
            </div>
        </div>
        ';
}
?>
    
    <div class="registration-form">
        
        <form action="" method="post" enctype="multipart/formdata">
           <center><h3> ADD DISTRIBUTED ITEM DETAILS </h3></center> </br>
            <!--<div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>-->
            <label>&nbsp &nbsp Product ID</label>
            <div class="form-group">
                <input type="text"  class="form-control item" name= "Product_ID" id="Product_ID" placeholder="Product ID" value="<?php echo $_GET['product_id'];?>" readonly>

            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name= "qty_distributed" id="qty_distributed" placeholder="Quantity to be Distributed">
                <?php echo form_error('qty_distributed');?>

            </div>


            <div class="form-group">
                <input type="date" class="form-control item" name= "date_distributed" id="date_distributed" placeholder="Date of Distributed">
                <?php echo form_error('date_distributed');?>

            </div>

            
            <div class="form-group">
                <select name="head_initials" class="form-control item"  id="head_initials">
                    <option value="Computer">Computer</option>
                    <option value="Civil">Civil</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="IT">IT</option>
                    <option value="Pharmacy">Pharmacy</option>
                    <option value="Chemical">Chemical</option>
                    <option value="Plastic Polymer">Plastic Polymer</option>
                    <option value="Girls Hostel">Girls Hostel</option>
                    <option value="Boys Hostel">Boys Hostel</option>
                    <option value="Office">Office</option>
                    <option value="Library">Library</option>
                    <?php echo form_error('head_initials');?>

                  </select>

            </div>

        <div class="form-group" 
>
                <input type="submit" id="submit" name="submit" class="btn btn-block create-account" value="Submit">
        </div>
        
        </form>

    
    <!-- 
        
        <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    -->
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src=<?php echo base_url("/assets/js/dsr_script1.js");?>></script>
</body>
</html>