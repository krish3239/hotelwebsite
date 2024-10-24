<?php

function alert($type,$mssg)
{
    echo <<<alert
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>$mssg</strong> 
        
    </div>

    alert;
}
function redirect($url)
{
    echo"
    <script>window.location.href='$url'</script>
    ";
}
function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin'])&&$_SESSION['adminLogin']==true))
    {
        redirect('index.php');
    }
}

?>