<?php
    include_once "ketnoiCSDL.php";
    if(!isset($_REQUEST['IDPB'])){
        $query="select * from nhanvien";
    }
    else{
        $idpb=$_REQUEST['IDPB'];
        $query="select* from nhanvien where IDPB='$idpb'";
    }
    $result=connect("dulieu",$query);
    echo"<table border='1' width='100%'>";
    echo "<caption><h2>Xem Thong Tin Nhan Vien</h2></caption>";
    echo "<tr> <th>IDNV</th> <th>Ho ten</th> <th>IDPB</th> <th>Dia chi</th> </tr>";
    while($row=mysqli_fetch_array($result)){
        $idnv=$row["IDNV"];
        $hoten=$row["Hoten"];
        $id=$row["IDPB"];
        $diachi=$row["Diachi"];
        echo "<tr> <th>$idnv</th> <th>$hoten</th> <th>$id</th> <th>$diachi</th> </tr>";
    }
?>