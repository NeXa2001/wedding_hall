<?php
$con = mysqli_connect('localhost', 'root', '','register');
if ($con==false) {
    die("Connection error". mysqli_connect_error());
}