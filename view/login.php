<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <title>MVC - PHP</title>
</head>
<body>
<div id="login">
  <h3 class="text-center text-white pt-5">Login Form</h3>
  <div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
      <div id="login-column" class="col-md-6">
        <div id="login-box" class="col-md-12">
          <form id="login-form" class="form" action="" method="post">
            <h3 class="text-center text-info">Login</h3>
           
            <div class="form-group">
              <label for="username" class="text-info">Username: </label> <br>
              <input type="text" name="username" id="username" class="form-control">
            </div>

             <div class="form-group">
              <label for="password" class="text-info">Password: </label> <br>
              <input type="text" name="password" id="password" class="form-control">
            </div>

            <div class="form-group mt-2">
              <input type="submit" name="LoginSubmit" class="btn btn-info btn-md" value="submit">
            </div>

            <div id="reg_link" class="text-right">
              <a href="?register=true" class="text-info">Register</a>
            </div>

          </form>
        </div> <!--========= login box ==========-->
      </div> <!--========= login-column ==========-->
    </div><!--========= login row ==========-->
  </div>    <!--========= container ==========-->
</div>

  


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>