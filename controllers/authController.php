<?php

require 'config/db.php';

$errors = array();
$username = "";
$email = "";

//if user clicks on the sign up button
  if(isset($_POST['signup-btn'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $passwordConf = $_POST['passwordConf'];
  

      //validation
      if (empty($username)){
          $errors['username'] = "Username required";
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email is invalid";

      }
      if (empty($email)){
        $errors['email'] = "Email required";
    }
      if (empty($password)){
        $errors['password'] = "Password required";
    }
      if ($password !== $passwordConf);
        $errors['password'] = "The two passwords do not match";
    }

    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;

    if ($userCount > 0){
        $errors['email'] = "Email already exists";
    }
}
  