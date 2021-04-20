<?php
    include_once "ketnoiCSDL.php";
    $query="select * from phongban";
    $result=connect("dulieu",$query);
    echo"<table border='1' width='100%'>";
    echo"<caption><h2>Xem Thong Tin Phong Ban</h2></caption>";
    echo"<tr><th>ID phong ban</th><th>Ten phong ban</th><th>Mo ta</th><th>Xem nhan vien</th></tr>";
    while($row=mysqli_fetch_array($result)){
        $idphongban=$row["IDPB"];
        $tenpb=$row["TenPB"];
        $mota=$row["Mota"];
        $xemnv="xxx";
        echo "<tr><th>$idphongban</th><th>$tenpb</th><th>$mota</th><th><a href='/codePHP/phpbasic/xemthongtinNV.php?IDPB=$idphongban'>$xemnv</a></th></tr>"; 
    }
?>