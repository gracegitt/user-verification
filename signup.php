
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<!-- Bootstrap 4 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

<title>Register</title>
</head>

<body>
 <div class="container">
     <div class="row">
         <div class="col-md-4 offset-md-4 form-div">
            <form action="signup.php" method="post">
                <h3 class="text-center">Register</h3>

                <!--<div class="alert alert-danger">
                    <li>Username required</li>
                </div>-->

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <label for="passwordConf">Confirm Password</label>
                    <input type="passwordConf" name="passwordConf" class="form-control form-control-lg">
                </div>
<br>
                <div class="form-group">
                    <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign up</button>
                </div>
                    <p class="text-center">Already a member?<a  href="login.php">Sign in</a></p>
</form>
               
         </div>
     </div>
 </div>
</body>
</html>
