<?php
    $hname='localhost';
    $uname='root';
    $pass='';
    $db='htweb';
    $con=mysqli_connect($hname,$uname,$pass,$db);

    if(!$con)
    {
        die("cannot to cnnect to database");
    }
    function filteration($data)
    {
        foreach($data as $key=>$value)
        {
            $data[$key]=trim($value);
            $data[$key]=stripcslashes($value);
            $data[$key]=htmlspecialchars($value);
            $data[$key]=strip_tags($value);
        }
        return $data;
    }

    function select($sql,$values,$datatypes)
    {
        $con=$GLOBALS['con'];
        if($smt=mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($smt,$datatypes,...$values);
            
            if(mysqli_stmt_execute($smt))
            {
                $res=mysqli_stmt_get_result($smt);
                mysqli_stmt_close($smt);
                return $res;
            }
            else{
                mysqli_stmt_close($smt);
                die("select cannot be executed");
            }
        }
        else{
            die("select cannot be prepared");
        }
    }

?>