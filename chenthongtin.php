<?php
session_start();
include_once "ketnoiCSDL.php";
include_once "checklogin.php";
echo " <h3>Chèn thông tin sinh viên</h3>";
echo "<form action='/codePHP/phpbasic/xulychen.php' method='GET'>";

echo " <label for='idnv'>IDNV</label>";
echo " <input id='idnv' type='text' name='IDNV'>";
echo "<br> <br>";

echo "<label for='hoten'>Họ tên</label>";
echo "<input id='hoten' type='text' name='Hoten'>";
echo "<br><br>";

echo "<label for='idpb'>IDPB</label>
<select name='IDPB'>";
$query = 'select IDPB from phongban';
$result = connect("dulieu", $query);
while ($row = mysqli_fetch_array($result)) {
    $idpb = $row["IDPB"];
    echo "<option value='$idpb'>$idpb</option>";
}
echo "</select>";
echo "<br><br>";

echo "<label for='diachi'>Địa chỉ</label>";
echo "<input id='diachi' type='text' name='Diachi'>";
echo"<br><br>";

echo "<input type='submit' name='submit' value='Insert'>";
echo "&nbsp;&nbsp;";
echo "<button type='Reset' value='cancel' onclick='javascript: history.back()'> Cancel </button>";
echo "</form>";

