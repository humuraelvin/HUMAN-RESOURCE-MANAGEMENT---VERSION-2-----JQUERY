<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

        <center>

        <div class="form_deg">
            <form method="" action="" class="login_form">
               <div>
               <label class="label_deg" >Username:</label>
                 <input type="text" name="username">
               </div>

               <div>
               <label class="label_deg" >Password:</label>
                 <input type="password" name="password">
               </div>

               <div>
               
                 <input class = "btn btn-primary" type="submit" name="submit" value="Login" >
               </div>
               

            </form>
        </div>

        </center>



</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href=".css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .login-container {
      margin-top: 100px;
    }
    .login-form {
      width: 300px;
      margin: auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px #000000;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group input:focus {
      outline: none;
      box-shadow: 0px 0px 5px 0px #007bff;
    }
    .btn-login {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }
    .btn-login:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body background="comp.jpeg" class="body_deg">
           
        <center><h1><strong>LOGIN FORM</strong></h1></center>

  <div class="container login-container">
    <div class="login-form">
      <h2 class="text-center mb-4">Login</h2>

              
         <h5 style ="color:red;">

        <?php

             session_start();
             error_reporting(0);
             session_destroy();

             echo $_SESSION['loginMessage'];

        ?>

        </h5>



      <form method="POST" action="login_check.php">

        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username" >
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" >
        </div>
        <button type="submit" name="submit" class="btn btn-login">Login</button>

      </form>


    </div>
  </div>
</body>
</html>
