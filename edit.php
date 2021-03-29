<?php
  if(!isset($_GET['id'])){
    die(' this staff id did not provided');
  }

  require_once('config.php');
  $id= $_GET['id'];
  $sql = "SELECT * FROM `staff_details` where id = $id";
  $result = $conn->query($sql);
  if($result->num_rows !=1){
    die('staff id does not exit');
  }
  $data = $result->fetch_assoc();
  

?>
<html>
<link rel="stylesheet" href="css/organizetrip.css">
<div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
        <div class="background">
            <div class="container">
              <div class="screen">
                <div class="screen-header">
                  <div class="screen-header-left">
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                  </div>
                  <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                  </div>
                </div>
                <div class="screen-body">
                  <div class="screen-body-item left">
                    <div class="app-title">
                      <span>EDIT</span>
                      <span>CRS STAFF</span>
                    </div>
                  </div>
                  <form action="./modify.php?id=<?= $id ?>" method="POST">
                  <div class="screen-body-item"> 
                      <div class="app-form-group">
                      <label>Username</label>
                        <input type="text"  class="app-form-control" minlength="4" placeholder="ENTER USERNAME HERE" name="username" value="<?=$data['username']?>" required>
                      </div>
                      <div class="app-form-group">
                      <label>Password</label>
                        <input type="text" class="app-form-control" placeholder="ENTER PASSWORD HERE" name="password" value="<?=$data['password']?>" required>
                      </div>
                    <div class="app-form">
                      <div class="app-form-group">
                      <label>Fullname</label>
                        <input type="text" class="app-form-control" placeholder="ENTER FULL NAME HERE" name="fullname" value="<?=$data['fullname']?>" required>
                      </div>
                      <div class="app-form-group">
                      <label>Email</label>
                        <input type="email" class="app-form-control" id="mail" placeholder="ENTER EMAIL HERE" name="email" value="<?=$data['email']?>" required onkeydown="validation()">
                      </div>
                      <div class="app-form-group">
                      <label>Phone</label>
                        <input type="int" class="app-form-control" placeholder="ENTER PHONE NO HERE" name="phone" value="<?=$data['phone']?>" required>
                      </div>
                      <div class="app-form-group message">
                      <label>Date Joined</label>
                        <input type="date" id="dateControl" class="app-form-control" placeholder="" name="datejoined" value="<?=$data['datejoined']?>" required></input>
                      </div>
                      <div class="app-form-group">
                      <label>Position</label>
                        <input type="text" class="app-form-control" placeholder="ENTER POSITION HERE" name="position" value="<?=$data['position']?>" required>
                      </div>
                      <div class="app-form-group buttons">
                        <button class="app-form-button">CANCEL</button>
                        <button type="submit" class="app-form-button" name="editForm">EDIT STAFF</button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
<html>