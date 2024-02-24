<?php
    $dataarray = array();
    $index = 0;

    $con = mysqli_connect("sql200.infinityfree.com","if0_35742560","UFFbVmcYe0l","if0_35742560_db_gpacal"); 

    $query = "SELECT u_name,u_review FROM tb_user_review"; 

    $result = mysqli_query($con,$query);   

    while ($row = mysqli_fetch_assoc($result)){      
        $dataarray[$index] = $row;
        $index = $index+1;
    }


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review</title>
    <link rel="icon" type="image/x-icon" href="title.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  
    <script>
      
      
    </script>

  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php">GPA Calculator</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
              </ul>

              <ul class="navbar-nav ">
                    <li class="nav-item">
                    <a class="nav-link" href="review.php">Review</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                    </li>
            </ul>
              
          </div>
      </div>
    </nav>

    <div class="container  mt-4">
      <div style="background-color: rgb(228, 228, 228); padding: 8px;">
        <h2> Reviews </h2>
      </div>

      <div class="container  mt-4" style="text-align: justify;">

        <div class="d-grid gap-2">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#reviewModal">Write a Review</button>
        </div>

        <?php
          foreach ($dataarray as $record){  ?>

          <div class="card mt-4">
            <div class="card-body">
              <h6 class="card-title"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
              </svg> <?php echo $record ['u_name']; ?> </h6>
              <p class="card-text"> <?php echo $record ['u_review']; ?> </p>
            </div>
          </div>

        <?php } ?>
        
        
        

      </div>

    </div>

    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Write Review</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="savereview.php" name="submitreviewform" accept-charset="UTF-8" enctype="multipart/form-data" method="post">

                  <div class="modal-body" style="font-weight: bold;">

                    <div class="mb-3">
                      <label for="reviewname" class="form-label">Your Name</label>
                      <input type="text" class="form-control" id="reviewname" name="reviewname" placeholder="Optional">
                    </div>
                    <div class="mb-3">
                      <label for="review" class="form-label">Review</label>
                      <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                    </div>
                  
                  </div>

                  <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                  </div>

                </form>
            </div>
        </div>
    </div>

    <div class="mt-5">

      <footer class="bg-dark text-center text-white">
      
          <div class="p-4 pb-0">
              <section class="">
                  <form action="save.php" name="reviewform" accept-charset="UTF-8" enctype="multipart/form-data" method="post">
                      <div class="row d-flex justify-content-center">
                          <div class="col-auto">
                              <p class="pt-2">
                                  <strong>Submit your ideas...</strong>
                              </p>
                          </div>
                          <div class="col-md-5 col-12">
                              <div class="form-outline form-white mb-4">
                                  <textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
                              </div>
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-outline-light mb-4">
                              Send
                          </button>
                          </div>
                      </div>
                  </form>
              </section>
          </div>

          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2024 Design By:
          <a class="text-white" href="http://dineth.lovestoblog.com/">Dineth Weerasinghe</a>
          </div>
          
      </footer> 
    </div>

    
    <div class="modal fade" id="sendideaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Thank You!</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-center" style="font-size: 20px;" id="printmsg">
                  
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  </body>

</html>