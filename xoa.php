<?php
    session_start();
    include_once "ketnoiCSDL.php";
    include_once "checklogin.php";
    $query="select * from nhanvien";
    $result=connect("dulieu",$query);
    echo "<form action='/codePHP/phpbasic/xulyxoa.php' method='GET'>";
    echo "<table border='1' width='100%'>";
    echo "<tr><th colspan='5'><h1>Xóa thông tin</h1></th></tr>";
    echo "<tr> <th>IDNV</th> <th>Họ tên</th> <th>IDPB</th> <th>Địa chỉ</th> <th>Xóa</th></tr>";
    while($row=mysqli_fetch_array($result)){
        $idnv=$row["IDNV"];
        $hoten=$row["Hoten"];
        $idpb=$row["IDPB"];
        $diachi=$row["Diachi"];
        $xoa="Xoá";
        echo "<tr> <td>$idnv</td> <td>$hoten</td> <td>$idpb</td> <td>$diachi</td> <td align=center><input type='checkbox' name='$idnv' value=$idnv></td></tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<div text-align='right'>";
    echo "<input type='submit' name='submit' value='Xóa' text-align: right>";
    echo "&nbsp;";
    echo "</div>";
    echo "</form>";
?>