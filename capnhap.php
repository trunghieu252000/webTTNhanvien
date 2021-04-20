<?php
    session_start();
    include_once "ketnoiCSDL.php";
    include_once "checklogin.php";
    $query="select * from phongban";
    $result=connect("dulieu",$query);
    echo "<table border='1' width='100%'>";
    echo "<caption><h2>Xem Thông Tin Phòng Ban</h2></caption>";
    echo "<tr> <th>IDPB</th> <th>Tên phòng ban</th> <th>Mô tả</th> <th>Cập nhập</th> </tr>";
    while($row=mysqli_fetch_array($result)){
        $idpb=$row["IDPB"];
        $tenpb=$row["TenPB"];
        $mota=$row["Mota"];
        $capnhap="Cập nhập";
        echo "<tr> <th>$idpb</th> <th>$tenpb</th> <th>$mota</th> <th><a href='http://localhost/codePHP/phpbasic/formcapnhap.php?IDPB=$idpb'>$capnhap</a></th></tr>";
    }
?>