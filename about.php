<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="title.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  
    <script>
      
      function sendmsg(){
        document.getElementById("printmsg").innerHTML = "Currently not available...";
      }
      
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
        <h2> About GPA Calculator </h2>
      </div>
      <div class="container  mt-4" style="text-align: justify;">
        <p>
          Welcome to my page, your gateway to understanding the brains behind the innovative GPA calculator designed with your academic success 
          in mind. <br><br>

          The GPA calculator is a powerful tool meticulously crafted to simplify the complex task of computing your university's academic GPA. 
          No more grappling with confusing formulas or spending endless hours on manual calculations. With the user-friendly interface, you 
          can effortlessly input subject credits and results for each semester across all four years of your academic journey. <br><br>

          To get started, all you need to do is enter your subject credits and results for each semester. Don't forget to activate the 
          subjects by checking the designated button. The calculator takes care of the rest, providing you with an accurate and instant 
          representation of your academic standing. <br><br>

          I understand the importance of simplicity and accuracy when it comes to academic calculations, and our GPA calculator reflects 
          that commitment. Whether you're a student striving for excellence or an educator looking for a reliable tool, our calculator is 
          here to make your academic journey smoother. <br><br>

          Connect with me on social media to stay updated on the latest features, enhancements, and educational resources. I value your 
          feedback and am continuously working to improve your experience with my GPA calculator. <br><br>

          This page was created by <a href="http://dineth.lovestoblog.com/">Dineth Weerasinghe</a>, a final-year undergraduate with a passion for creating tools that empower academic 
          success. Connect with me on social media to learn more about the person behind the innovation and join the conversation. <br><br>

          Thank you for choosing our platform. Empower your academic success with precision and ease, courtesy of our GPA calculator.
        </p>

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