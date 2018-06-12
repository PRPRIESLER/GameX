<?php

$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'gamex');

$errors=array();

if(isset($_POST['register-submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    if(empty($username))
    {
        array_push($errors,"Enter Username");
    }
    if(empty($password))
    {
        array_push($errors,"Enter Password");
    }
    if(empty($confirmpassword))
    {
        array_push($errors,"Enter confirmPassword");
    }
    if($password!=$confirmpassword)
    {
        array_push($errors,"Password do not Match");
    }
    if(count($errors)== 0)
    {
        $sql="INSERT INTO register (register.username,register.password) VALUES ('$username','$password')";
        mysqli_query($db,$sql);
        header('location:Shop.html');
    }
}

if(isset($_POST['login-submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username))
    {
        array_push($errors,"Enter Username");
    }
    if(empty($password))
    {
        array_push($errors,"Enter Password");
    }
    if(count($errors)== 0)
    {
        $query="SELECT * FROM register WHERE register.username='$username' AND register.password='$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result) == 1)
        {   

            header('location:Shop.html');
        }
        else
        {
            array_push($errors,"Invalid Entries");
        }
    }
}

?>