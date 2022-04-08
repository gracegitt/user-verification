<?php 
session_start();
require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<!-- Bootstrap 4 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

<title>Homepage</title>
</head>

<body>
 <div class="container">
     <div class="row">
         <div class="col-md-4 offset-md-4 form-div login">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class']; ?>"> 
        <?php echo $_SESSION['message']; 
        unset($_SESSION['message']);
        unset($_SESSION['alert-class']);
        ?>
    </div>
    <?php endif; ?>

         <h3>Welcome, Grace</h3>

         <a href="#" class="logout">logout</a>

        <?php if(!$_SESSION['verified']): ?>
         <div class="alert alert-warning">
             You need to verify your account
             Sign in to your email account and click on the verification we just emailed you at
              <strong>value="<?php echo $_SESSION['username']; ?>"</strong>
             </div>
        <?php endif; ?>
        <?php if(!$_SESSION['verified']): ?>
             <button class="btn btn-block btn-lg btn-primary">I am Verified!</button>
             <?php endif; ?>
                     </div>

     </div>
 </div>

</body>
</html>
