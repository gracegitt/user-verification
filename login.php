
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<!-- Bootstrap 4 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

<title>Log in</title>
</head>

<body>
 <div class="container">
     <div class="row">
         <div class="col-md-4 offset-md-4 form-div login">
            <form action="login.php" method="post">
                <h3 class="text-center">Log in</h3>

                <!--<div class="alert alert-danger">
                    <li>Username required</li>
                </div>-->

                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" name="username" class="form-control form-control-lg">
                </div>

                

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                </div>

<br>
                <div class="form-group">
                    <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Log in</button>
                </div>
                <p class="text-center">Not yet a member?<a  href="signup.php">Sign up</a></p>
</form>
               
         </div>
     </div>
 </div>
</body>
</html>
