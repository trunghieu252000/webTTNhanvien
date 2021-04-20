<?php 
if(isset($_GET['submit'])){
    include_once "ketnoiCSDL.php";
    $ID = $_GET['IDPB'];    
    $TenPb= $_GET['TenPB'];
    $mota = $_GET['Mota'];    
    $query = "Update phongban set TenPB='$TenPb', Mota='$mota' where IDPB=$ID";
    $result=connect("dulieu",$query);    
    if($result) {
        header("Location: http://localhost/codePHP/phpbasic/capnhap.php/");
    }
    else {
        echo "update thất bại";
    }
}

?>