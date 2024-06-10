<?php 
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $pop= $_POST['pop'];
    $food= $_POST['food'];
    $req= $_POST['req'];
    $vname= $_POST['vname'];   
    $sql= "Insert into boooking_per_user(fname, lname, phone, email, pop, food, req) Values ('$fname', '$lname', '$phone', '$email', '$pop', '$food', '$req')";
    $query= mysqli_query($con,$sql);
    echo "<script type='text/javascript'>alert('success')</script>";
    
 }