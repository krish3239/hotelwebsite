<?php
require('inc/db_config.php');
require('inc/essentials.php');
session_start();
if((isset($_SESSION['adminLogin'])&&$_SESSION['adminLogin']==true))
{
    redirect('dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Pannel</title>
    <?php require('inc/links.php') ?>
    <style>
       
         .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body class="bg-light">

    <div class="login-form rounded">
        <form method="POST">
            <h4>ADMIN LOGIN PANEL</h4>
            <div>
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow none text-center" placeholder="enter name">
                </div>
                <div class="mb-4">
                    <input type="password" required name="admin_pass" class="form-control shadow none text-center" placeholder="enter password">
                </div>
                <button name="login" type="submit" class="btn bg-success w-100">login</button>
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['login']))
        {
            $form_data=filteration($_POST); 
            $query="SELECT * FROM `admin_cred`WHERE `admin_name`=? AND `admin_pass`=?";
            $values=[$form_data['admin_name'],$form_data['admin_pass']];
            $res=select($query,$values,"ss");
            if($res->num_rows==1)
            {
                $row=mysqli_fetch_assoc($res);
               
                $_SESSION['adminLogin']=true;
                $_SESSION['adminId']=$row['sno'];
                redirect('dashboard.php');
            }
            else{
                alert('error','login failed');
            }
            
        }
    ?>
        
    <?php require('inc/scripts.php') ?>
</body>
</html>