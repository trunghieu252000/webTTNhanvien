<?php
include_once "ketnoiCSDL.php";
if (isset($_GET['IDPB'])) {
    $idpb = $_GET['IDPB'];
    $query = "select * from phongban where IDPB=$idpb";
    $result = connect("dulieu", $query);
    while ($row = mysqli_fetch_array($result)) {
        $idpb=$row["IDPB"];
        $tenpb = $row["TenPB"];
        $mota = $row["Mota"];
    }
    echo "<h1> Cập nhật phòng ban </h1>";
    echo "<form action='/codePHP/phpbasic/xulycapnhap.php' method='GET'>";

    echo "<label for='text'> IDPB </label>";
    echo "<input id='text' name='IDPB' type='text' value='$idpb' readonly></input>";
    echo "<br> <br>";

    echo "<label for='text'> Tên Phòng Ban </label>";
    echo "<input id='text' name='TenPB' value='$tenpb'></input>";

    echo "<br><br>";
    echo "<label for='text'> Mô tả </label>";
    echo "<input id='text' name='Mota'value='$mota'></input>";

    echo "<br><br>";
    echo "<input type='submit' name='submit' value='Submit'>";
    echo "<button type='Reset' value='Reset' onclick='javascript: history.back()'> Exit </button>";
    echo "</form>";
}
