<?php
include_once "ketnoiCSDL.php";
    // $link=mysqli_connect("localhost","root","") or die("fail");
    // mysqli_select_db($link,"dulieu");
    $query="select * from nhanvien ";
    //$result=mysqli_query($link,$query);
    $result=connect("dulieu",$query);
    echo'<table border="1" width="100%">';
    echo'<caption><h2>Danh Sach Cac Nhan Vien</h2></caption>';
    echo'<TR><TH>MSNV</TH><TH>Ho Ten</TH><TH>IDPB</TH><TH>Dia chi</TH></TR>';
    while($row= mysqli_fetch_array($result)){
        $maso=$row["IDNV"];
        $hoten=$row["Hoten"];
        $IDPB=$row["IDPB"];
        $diachi=$row["Diachi"];
        $xemnhanien="xxx";
        echo"<tr><td>$maso</td><td>$hoten</td><td>$IDPB</td><td>$diachi</td></tr>";
    }
    echo'<TABLE>';
?>