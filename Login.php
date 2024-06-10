<?php
 session_start();
 include("db.php");
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $email= $_POST['email'];
    $pass= $_POST['pass'];

    if(!empty($email) && !empty($pass)){
        $query="select *from form_inputs where email='$email' limit 1";
        $result= mysqli_query($con, $query);
        if($result){
            if($result && mysqli_num_rows($result)> 0){
                $user_data= mysqli_fetch_assoc($result);
                if($user_data['pass']== $pass){
                    header('Location: index.html');
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong user')</script>";

    }
    else{
        echo "<script type='text/javascript'>alert('whellopassword')</script>";
    }
}