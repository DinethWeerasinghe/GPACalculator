<?php

    $printmsg = "";
    $textcolor = "black";

    if(!empty($_POST)){
        $msg = $_POST['msg'];

        $conn = mysqli_connect("sql200.infinityfree.com","if0_35742560","UFFbVmcYe0l","if0_35742560_db_gpacal");

        $q = "INSERT INTO tb_review
        (review_message) 
        VALUE ('$msg')";

        $result = mysqli_query($conn,$q);

        if($result){
            $printmsg = "Your message was submitted...";
            $textcolor = "blue";
        }
        else{
            $printmsg = "Something went wrong... Your message was not submitted...";
            $textcolor = "red";
        }

        mysqli_close($conn);
    }
    

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thank You!</title>
  <link rel="icon" type="image/x-icon" href="title.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            
</head>


<body>

    <div class="container mt-5">

        <div class="mt-5" style="padding: 5px; text-align: center">
            <h1> Thank You! </h1>
        </div>
        <div class="mt-5" style="padding: 5px; text-align: center; color: <?php echo $textcolor ?>">
            <h4> <?php echo $printmsg ?> </h4>
        </div>

        <div class="mt-2" style="padding: 5px; text-align: center">
            <button type="button" class="btn btn-success" onclick="location.href='index.php';"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg> Go Back </button>
        </div>

    </div>

    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>


