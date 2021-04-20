<?php
session_start();
include_once("checklogin.php");
    include_once "ketnoiCSDL.php";
    $query="select * from phongban";
    $result=connect("dulieu",$query);
    echo "<form action='/codePHP/phpbasic/xylyxoatatca.php' method='GET'>";
    echo "<table border='1' width='100%'>";
    echo "<tr><th colspan='4'><h1>Xóa thông tin</h1></th></tr>";
    echo "<tr> <th>IDPB</th> <th>Tên phòng ban</th> <th>Mô tả</th> <th>Xóa</th></tr>";
    while($row=mysqli_fetch_array($result)){
        $idpb=$row["IDPB"];
        $tenpb=$row["TenPB"];
        $mota=$row["Mota"];
        $xoa="Xoá";
        echo "<tr> <td>$idpb</td> <td>$tenpb</td> <td>$mota</td> <td align=center><input type='checkbox' name='$idpb' value=$idpb></td></tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<div >";
    echo "<input type='submit' name='submit' value='Xóa' text-align: right>";
    echo "&nbsp;";
    echo "</div>";
    echo "</form>";
?>