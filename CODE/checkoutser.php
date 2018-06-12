<?php
$db=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($db,'gamex');

    $qryempty="call dropcart()"; //Stored Procedure
    $emptyres = mysqli_query($db,$qryempty);
    header('location:Done.html');
?>