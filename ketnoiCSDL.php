<?php
function connect($dulieu,$query){
    $link=mysqli_connect("localhost","root","") or die("Fail");
    mysqli_select_db($link,$dulieu);
    $result=mysqli_query($link,$query);
    return $result;
}
?>