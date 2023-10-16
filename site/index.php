<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AB Fashion Hub | Shop with us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius+Swash+Caps|Andika' rel='stylesheet'>
   
    
</head>
<body style="background-color:#D3D3D3;">
    <!--Header-->
    <?php
        include 'includes/header_menu.php';
        include 'includes/check-if-added.php';
    ?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class="">
            <div class="container1" style="margin-top:23px;">
                <div class="mx-auto p-5 text-white" style="border-radius: 0.5rem;">
               
                        </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-4 h3">
       <p style="font-family: Times New Roman, Times, serif; font-size:60px; "> Let Your Fashion Speak</p><br>
       <p style="font-family: Times New Roman, Times, serif; font-size:50px;color:white;"> You Seek We Serve</p> 

    </div>
    <!--menu highlights start-->
    <div class="container pt-3">
        <div class="row text-center">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#watch">
                    <img src="images/watch.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">Watches</div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#shirt">
                    <img src="images/clothing.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem;">
                    <div class="h5 pt-3 font-weight-bolder">Fashion</div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#shoes">
                    <img src="images/shoes.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">Footwear</div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#headphones">
                    <img src="images/headphones.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">Headphones/Gadgets</div>
                </a>
            </div>
        </div>
    </div>
    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function() {
        if (window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }
    });
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
        $(document).ready(function(){
            $('#signup').modal('show');
        });
    </script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
        $(document).ready(function(){
            $('#login').modal('show');
        });
    </script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>
