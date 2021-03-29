<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'volunteer');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Full_name = mysqli_real_escape_string($db, $_POST['Full_name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $HP = mysqli_real_escape_string($db, $_POST['HP']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Full_name)) { array_push($errors, "Full name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($HP)) { array_push($errors, "Mobile number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password =($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (Full_name, username, password, email, HP, address) 
  			  VALUES('$Full_name', '$username', '$password', '$email', '$HP', '$address')";
  	mysqli_query($db, $query);
  	header('location: manageVolunteerProfile.php');
  }

